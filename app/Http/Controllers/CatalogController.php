<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalogView(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');

        $query = Product::query();

        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('little_description', 'like', '%' . $search . '%');
            });
        }

        if ($category) {
            $query->where('category_id', '=', $category);
        }

        $products = $query->get();
        $categories = Category::all();

        // Проверяем, есть ли результаты поиска или фильтрации
        $noResults = false;
        if ($products->isEmpty() && ($search || $category)) {
            $noResults = true;
        }

        return view('catalog', compact('products', 'categories', 'noResults', 'search', 'category'));
    }

}
