<?php

namespace App\Http\Controllers;

use App\Models\Bonus;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileView()
    {
        $user = auth()->user();
        return view('profile.main', compact('user'));
    }

    public function profileOrdersView()
    {
        $userId = auth()->id();
        $orders = Order::where('user_id', $userId)->orderBy('created_at', 'desc')->get();

        // Форматирование даты и времени для каждого заказа
        $orders->each(function ($order) {
            $order->date = Carbon::parse($order->date)->translatedFormat('d F Y');
            $order->time = Carbon::parse($order->time)->format('H:i');
        });

        return view('profile.orders', compact('orders'));
    }

    public function profileBonus()
    {
        $id = auth()->id();
        $bonus = Bonus::where('user_id', $id)->first();
        return view('profile.bonus', compact('bonus'));
    }
}
