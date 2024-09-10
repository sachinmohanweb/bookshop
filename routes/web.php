<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackendController;


Route::get('/', [HomeController::class, 'home_page'])->name('home.page');
Route::get('bookList', [HomeController::class, 'book_list'])->name('book.list');
Route::get('bookDetails', [HomeController::class, 'book_details'])->name('book.details');
Route::get('buyNow', [HomeController::class, 'buy_now'])->name('buy.now');
Route::get('cart', [HomeController::class, 'cart'])->name('cart');
Route::get('purchaseDetails', [HomeController::class, 'purchase_details'])->name('purchase.details');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::get('admin', [BackendController::class, 'admin_index'])->name('admin.index');
Route::post('login', [BackendController::class, 'admin_login'])->name('admin.login');

Route::middleware('auth:admin')->group(function(){

    Route::get('logout', [BackendController::class, 'admin_logout'])->name('admin.logout');
    Route::get('dashboard', [BackendController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('books', [BackendController::class, 'books'])->name('admin.books');
    Route::get('authors', [BackendController::class, 'authors'])->name('admin.authors');
    Route::get('genres', [BackendController::class, 'genres'])->name('admin.genres');
    Route::get('banners', [BackendController::class, 'banners'])->name('admin.banners');

});