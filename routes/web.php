<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'mainView'])->name('home');
Route::get('/about', [PagesController::class, 'aboutView'])->name('about');
Route::get('/catalog', [CatalogController::class, 'catalogView'])->name('catalog');
Route::get('/product/{id}', [ProductController::class, 'productView'])->name('product');


Route::middleware('auth.guest')->group(function () {
    Route::post('/register', [UserController::class, 'register'])->name('user.register');
    Route::post('/login', [UserController::class, 'login'])->name('user.login');
});

Route::middleware('auth.check')->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'profileView'])->name('profile');
    Route::get('/profile/orders', [ProfileController::class, 'profileOrdersView'])->name('profile.orders');
    Route::get('/profile/bonus', [ProfileController::class, 'profileBonus'])->name('profile.bonus');

    Route::post('/order/create', [OrderController::class, 'createOrder'])->name('order.create');
});

Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('', [AdminController::class, 'adminView'])->name('admin.main');
    Route::post('/change-order-status', [AdminController::class, 'changeOrderStatus'])->name('admin.change.order.status');

    Route::get('/products', [AdminController::class, 'adminProductsView'])->name('admin.product');
    Route::get('/products/create', [AdminController::class, 'addProduct'])->name('admin.product.create');
    Route::post('/products', [AdminController::class, 'storeProduct'])->name('admin.product.store');
    Route::get('/products/{id}/edit', [AdminController::class, 'editProduct'])->name('admin.product.edit');
    Route::put('/products/{id}', [AdminController::class, 'updateProduct'])->name('admin.product.update');
    Route::delete('/products/{id}', [AdminController::class, 'deleteProduct'])->name('admin.product.delete');

    Route::get('/categories', [AdminController::class, 'adminCategoriesView'])->name('admin.category');
    Route::get('/categories/create', [AdminController::class, 'addCategory'])->name('admin.category.create');
    Route::post('/categories', [AdminController::class, 'storeCategory'])->name('admin.category.store');
    Route::get('/categories/{id}/edit', [AdminController::class, 'editCategory'])->name('admin.category.edit');
    Route::put('/categories/{id}', [AdminController::class, 'updateCategory'])->name('admin.category.update');
    Route::delete('/categories/{id}', [AdminController::class, 'deleteCategory'])->name('admin.category.delete');
});
