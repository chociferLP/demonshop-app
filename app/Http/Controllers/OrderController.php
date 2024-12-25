<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\CartItems;
use App\Models\OrderItems;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function AddOrder(ShoppingCart $ShoppingCart)
    {
        $items = $ShoppingCart->ToCartItems()->with('product')->get();
        $user = auth()->id();
        $totalPrice = 0;
        $order = Order::create([
            'cart_id' => $ShoppingCart->id,
            'user_id'=> $user,
            'price' => 0
        ]);
        foreach($items as $item)
        {
            $price = $item->product->price * $item->count;
            $totalPrice += $price;
            $order->ToOrderItem()->create([
                'price' => $price,
                'count' => $item->count,
                'product_id' => $item->product->id,
            ]);
        }
        $order->update([
            'price' => $totalPrice
        ]);

        return redirect()->route('order.index');
    }
    public function index(ShoppingCart $ShoppingCart)
    {
        $ordercount = OrderItems::count();
        $price = OrderItems::sum('price');

        $OrderItems = OrderItems::all();
        return view('order.index',['OrderItems'=>DB::table('order_items')->paginate(4)],compact('OrderItems','ordercount','price'));
    }
}
