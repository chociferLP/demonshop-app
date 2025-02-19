<?php

namespace App\Http\Controllers\panel;

use App\Models\OrderItem;
use App\Models\Post;
use App\Models\User;
use App\Models\Order;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->notifications;
        $user = auth()->user();
        $users_count = User::count();
        $categories_count = Category::count();
        $productsCount = Product::count();
        if (auth()->user()->role === 'author') {
            $posts_count = Post::where('user_id', auth()->user()->id)->count();
            $comments_count = Comment::whereHas('post', function ($query) {
                return $query->where('user_id', auth()->user()->id);
            })->count();
        }

        return view('panel.users.index', compact(
            'users_count',
            'categories_count',
            'productsCount',
            'user',
        ));
    }
}
