<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //Главная страница
    public function adminView()
    {
        $orders = Order::all();
        $orders->each(function ($order) {
            $time = $order->product->time_end;
            $timeToAdd = Carbon::createFromFormat('H:i', sprintf('%02d:00', $time));
            $order->date = Carbon::parse($order->date)->translatedFormat('d F Y');
            $order->time = Carbon::parse($order->time)->format('H:i');
            $initialCarbonTime = Carbon::createFromFormat('H:i', $order->time);
            $resultTime = $initialCarbonTime->addHours($timeToAdd->hour);
            $order->time_time= $resultTime->format('H:i');
        });
        $statuses = ['создан', 'принят', 'отменен', 'выполнен'];
        return view('admin.main', compact('orders', 'statuses'));
    }

    //    Категория
    public function adminCategoriesView()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }
    public function addCategory()
    {
        return view('admin.add-category');
    }

    public function storeCategory(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|unique:categories|max:255',
        ]);

        Category::create($data);

        return redirect()->back()->with('success', 'Категория создана!');
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.update-category', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|unique:categories,title,' . $category->id . '|max:255',
        ]);
        $category->update($data);
        return redirect()->back()->with('success', 'Категория обновлена');
    }

    public function deleteCategoryView($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.delete-confirm-category', compact('category'));
    }

    public function deleteProductView($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.delete-confirm-product', compact('product'));
    }

    public function deleteCategory($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.category')->with('success', 'Категория удалена');
    }
//        Продукты
    public function adminProductsView()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    public function addProduct()
    {
        $categories = Category::all();
        return view('admin.add-product', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'little_description' => 'required|string|max:255',
            'description' => 'required|string',
            'time_start' => 'required|integer|min:1|nullable',
            'time_end' => 'required|integer|min:1',
            'cleaner_start' => 'required|integer|min:1|nullable',
            'cleaner_end' => 'required|integer|min:1',
            'price' => 'required|numeric|min:1',
            'category_id' => 'required|numeric',
        ]);
        $imageName = time() . '_' . $request->image->getClientOriginalName();
        $request->image->storeAs('products', $imageName);
        $data['image'] = $imageName;
        Product::create($data);
        return redirect()->route('admin.product')->with('success', 'Продукт успешно добавлен!');
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.update-product', compact('product', 'categories'));
    }

    public function updateProduct(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'little_description' => 'required|string|max:255',
            'description' => 'required|string',
            'time_start' => 'required|integer|min:1|nullable',
            'time_end' => 'required|integer|min:1',
            'cleaner_start' => 'required|integer|min:1|nullable',
            'cleaner_end' => 'required|integer|min:1',
            'price' => 'required|numeric|min:1',
            'category_id' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::delete('products/' . $product->image);
            }

            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->storeAs('products', $imageName);
            $data['image'] = $imageName;
        }

        $product->update($data);

        return redirect()->route('admin.product')->with('success', 'Продукт успешно обновлен!');
    }

    public function deleteProduct($id){
        $category = Product::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.product')->with('success', 'Продукт удален');
    }


    public function changeOrderStatus(Request $request)
    {
        $orderId = $request->input('order_id');
        $newStatus = $request->input('status');

        $order = Order::find($orderId);
        if ($order) {
            $order->status = $newStatus;
            $order->save();
        }

        return redirect()->back()->with('success', 'Статус заказа успешно изменен!');
    }
}
