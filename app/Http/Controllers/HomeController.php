<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\CartItems;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(ShoppingCart $ShoppingCart,CartItems $cartItem)
    {
        $userId = auth()->id();
        $searchers = Category::with('products')
            ->get()
            ->filter(function ($category) {
                return $category->products->isNotEmpty();
            });
        $products = Product::all();
        $categories = Category::all();
        $parentCategories = Category::whereNull('parent_id')->with('children')->get();
        $ShoppingCart = ShoppingCart::latest('id')->value('id');
        $mainproduct = Product::orderBy('price','DESC')->first();
        
        return view('home.index', compact(
            'parentCategories',
            'categories',
            'products',
            'searchers',
            'userId',
            'ShoppingCart',
            'cartItem',
            'mainproduct'
        ));

    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $categories = Category::all();
        $products = Product::where('name', 'LIKE', "%$query%")
            ->orWhereHas('category', function ($q) use ($query) {
                $q->where('name', 'LIKE', "%$query%");
            })
            ->get();

        return view('home.search', compact('products', 'query', 'categories'));
    }
    public function creatcart()
    {
        $shoppingcart = ShoppingCart::where('user_id');
        $userId = auth()->id();
        ShoppingCart::firstOrCreate([
            'user_id' => $userId
        ]);
        return redirect()->back();
    }
}
