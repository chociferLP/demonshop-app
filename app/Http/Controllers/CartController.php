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

    public function add(Request $request, ShoppingCart $ShoppingCart, User $user)
    {
        $user = auth()->id();
        return redirect()->route('cart.show', compact('ShoppingCart', 'user'));
    }
    public function show(ShoppingCart $ShoppingCart, Order $order, User $user)
    {


        $items = $ShoppingCart->ToCartItems()->with('product')->get();


        return view('cart.index', compact('items', 'ShoppingCart', 'user', 'order'));
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
}
