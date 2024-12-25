<?php

use App\Http\Controllers\EditUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Panel\UserController;
use App\Http\Controllers\UserEditorController;
use App\Http\Controllers\Panel\CommentController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Admin\OrderItemController;
use App\Http\Controllers\panel\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('slash');
Route::get('/search', [HomeController::class, 'search'])->name('home.search');


Route::get('/panel', function () {
    return view('panel');
})->name('panel');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');




Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
Route::middleware(['auth', 'admin'])->prefix('/panel')->group(function () {
    Route::resource('/users', UserController::class)->except(['show']);
    Route::resource('/categories', CategoryController::class)->except(['show', 'create']);
    Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
    Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
});


Route::get('/panel/user', [UserController::class, 'index'])->name('admin.user.index');
Route::delete('/delete/user/{user}', [UserController::class, 'destroy'])->name('admin.user.delete');
Route::get('/edit/user/{user}', [UserController::class, 'edit'])->name('admin.user.edit');
Route::put('/update/{user}', [UserController::class, 'update'])->name('admin.user.update');


Route::get('/category/create', [CategoryController::class, 'index'])->name('category.index');
Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
Route::delete('/delete/category/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/update', [CategoryController::class, 'update'])->name('category.update');


Route::get('/product/index', [ProductController::class, 'index'])->name('books.index');
Route::get('/product/create', [ProductController::class, 'CreatePage'])->name('product.create');
Route::post('/product/create', [ProductController::class, 'upload'])->name('upload');
Route::get('/product/show', [ProductController::class, 'show'])->name('product.show');



Route::get('/categories/{id}/products', [ProductController::class, 'productsByCategory'])->name('categories.products');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');


Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.delete');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');

Route::post('/cart/item/{cart}/{product}', [CartController::class, 'additem'])->name('item.add');
Route::post('/cart', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/index/{user}', [CartController::class, 'show'])->middleware(['auth'])->name('cart.show');
Route::get('/cart/list',[CartController::class, 'showPanel'])->name('cart.panel');


Route::post('/order', [OrderController::class, 'AddOrder'])->name('order.add');
Route::get('/order/index', [OrderController::class, 'index'])->name('order.index');
Route::post('/creatcart',[HomeController::class,'creatcart'])->name('cart.button');

Route::get('/user/edit/{id}',[EditUserController::class,'page'])->name('edit.user');
Route::post('/user/edit',[EditUserController::class,'update'])->middleware('auth')->name('update.user');
Route::delete('/cart/destroy',[CartController::class,'destroyItem'])->name('destroy.cart');

require __DIR__ . '/auth.php';
