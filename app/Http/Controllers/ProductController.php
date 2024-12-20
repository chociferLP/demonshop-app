<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use App\Models\ShoppingCart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Requests\Panel\Category\ProductCreateRequest;

class ProductController extends Controller
{
    public function index(Request $request, Product $product, ShoppingCart $cart)
    {

        $sum = [$product, $cart];
        $sortOption = $request->input('sort', 'price_asc');
        $categories = Category::all();
        $search = $request->input('search');
        $productss = Product::when($search, function ($query, $search) {
            $query->where('name', 'LIKE', "%$search%")
                ->orWhereHas('category', function ($q) use ($search) {
                    $q->where('name', 'LIKE', "%$search%");
                });
        })
            ->with('category')
            ->paginate(4);
        $query = Product::query();

        // Apply price range filter if set in the request
        if ($request->has('min_price') && $request->has('max_price')) {
            $minPrice = $request->input('min_price');
            $maxPrice = $request->input('max_price');

            $query->whereBetween('price', [$minPrice, $maxPrice]);
        }

        $products = $query->get();

        $cart = ShoppingCart::latest('id')->value('id');

        return view('books.index', compact('products', 'categories', 'search', 'sum', 'cart'));
    }
    private function getSortColumn($sortOption)
    {
        return explode('_', $sortOption)[0];
    }

    private function getSortDirection($sortOption)
    {
        return explode('_', $sortOption)[1];
    }
    public function CreatePage()
    {

        $categories = Category::all();
        $products = Product::all();
        return view('panel.books.create', compact('products', 'categories'));
    }
    public function upload(Request $request)
    {

        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:255'],
                'price' => ['required', 'string', 'max:255'],
                'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'category_id' => 'required|exists:categories,id'

            ]);
            if ($request->hasFile('profile_pic')) {
                $profilePicPath = $request->file('profile_pic')->store('product_images', 'public');
                $validatedData['profile_pic'] = $profilePicPath;
            }

            $product = Product::create($validatedData);
        }
        return redirect()->route('product.show')->with('success', 'Product updated successfully.');
    }
    public function show()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('panel.books.show', compact('products', 'categories'));
    }
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('panel.books.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
        ]);
        return redirect()->route('product.show')->with('success', 'Product updated successfully.');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return back();
    }

    public function productsByCategory($id)
    {
        $cart = ShoppingCart::latest('id')->value('id');

        $user = User::findOrFail($id);
        $categoriess = Category::all();
        $showSearchBox = Product::whereNotNull('category_id')->exists();
        // Get the category and its products
        $category = Category::with('products')->findOrFail($id);
        $product = Product::where('category_id');
        // Optional: Paginate the products
        $products = $category->products()->paginate(10);

        // Return the view with the category and its products
        return view('books.index', compact('category', 'products', 'showSearchBox', 'user', 'cart'));
    }

}


