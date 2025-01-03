<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\CartItems;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function add(Request $request, ShoppingCart $ShoppingCart, User $user, CartItems $cartItem)
    {
        $user = auth()->id();
        return redirect()->route('cart.show', compact('user'));
    }
    public function show(Order $order, User $user)
    {
        $ShoppingCart = ShoppingCart::latest('id')->get()->first();
        // dd($ShoppingCart);
        $items = $ShoppingCart->ToCartItems()->with('product')->get();
        $cartItem = CartItems::latest('id')->get()->first();

        return view('cart.index', compact('items', 'ShoppingCart', 'user', 'order', 'cartItem'));
    }
    public function additem(Request $request, ShoppingCart $cart, Product $product)
    {

        $user = User::all();
        $userId = auth()->id();
        ShoppingCart::firstOrCreate([
            'user_id' => $userId
        ]);
        $countinput = $request->input('count');
        $shop = CartItems::where([
            'cart_id' => $cart->id,
            'product_id' => $product->id,
        ])->first();
        if ($shop) {
            $shop->update([
                'count' => $shop->count + $countinput
            ]);
        } else {
            $cart->ToCartItems()->create([
                'product_id' => $product->id,
                'count' => $countinput
            ]);
        }

        $cartid = ShoppingCart::all();
        return redirect()->back();
    }
    // public function destroy()
    // {

    // }
    public function showPanel()
    {
        return view('panel.cart.list');
    }
    public function destroyItem($id, CartItems $cartItem)
    {
        $cartItem = CartItems::findOrFail($id);
        $cartItem->delete();
        return redirect()->back();
    }
}
