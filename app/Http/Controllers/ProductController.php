<?php

namespace App\Http\Controllers;

use App\Models\Bonus;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productView($id)
    {
        $product = Product::findOrFail($id);
        $id = auth()->id();
        $bonus = Bonus::where('user_id', $id)->first();
        return view('product', compact('product', 'bonus'));
    }
}
