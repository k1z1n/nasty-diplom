<?php

namespace App\Http\Controllers;

use App\Models\Bonus;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required',
            'date' => 'required|date_format:Y-m-d',
            'time' => 'required|date_format:H:i',
            'area' => 'required|numeric'
        ]);

        $product = Product::findOrFail($request->product_id);

        $orderTime = Carbon::parse($request->time);
        $startTime = Carbon::createFromTime(8, 0, 0);
        $endTime = Carbon::createFromTime(23, 0, 0);

        if ($orderTime->lt($startTime) || $orderTime->gt($endTime)) {
            return back()->withInput()->with('error', 'Заказы принимаются только с 8 утра до 11 вечера.');
        }

        // Проверка занятости
        $existingOrders = Order::where('date', $request->date)
            ->get();

        foreach ($existingOrders as $existingOrder) {
            $existingOrderTime = Carbon::parse($existingOrder->time);
            $existingOrderEndTime = $existingOrderTime->copy()->addMinutes($existingOrder->product->time_end);

            $newOrderEndTime = $orderTime->copy()->addMinutes($product->time_end);

            if ($orderTime->between($existingOrderTime, $existingOrderEndTime) ||
                $newOrderEndTime->between($existingOrderTime, $existingOrderEndTime) ||
                $orderTime->lt($existingOrderTime) && $newOrderEndTime->gt($existingOrderEndTime)) {
                return back()->with('error', 'В это время уже запланирована уборка.');
            }
        }

        $userId = auth()->id();
        $totalPrice = $request->input('total_price');
        $useBonus = $request->has('useBonus');
        $currentBonus = User::find($userId)->bonus;

        // Максимально возможный бонус, который можно использовать
        $maxBonusToUse = $totalPrice * 0.2;

        if ($useBonus && $currentBonus > 0) {
            // Вычитаем использованные бонусы из итоговой цены
            $bonusToUse = min($currentBonus, $maxBonusToUse);
            $totalPrice -= $bonusToUse;

            // Обновляем бонусы пользователя
            $newBonus = $currentBonus - $bonusToUse;
        } else {
            // Начисляем бонусы, если они не использовались
            $newBonus = $currentBonus + round(($totalPrice * 5) / 100);
        }

        // Обновляем данные пользователя
        $user = User::find($userId);
        $user->bonus = $newBonus;
        $user->save();
        $data['total_price'] = $totalPrice;
        $data['user_id'] = $userId;
        Order::create($data);

        return redirect()->route('profile')->with('success', 'Заказ успешно создан!');
    }
}
