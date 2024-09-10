<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BannerController;


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

    Route::get('books', [BookController::class, 'books'])->name('admin.books');
    Route::get('addbook', [BookController::class, 'add_book'])->name('admin.add.book');
    Route::get('editbook', [BookController::class, 'edit_book'])->name('admin.edit.book');
    Route::get('bookdetails', [BookController::class, 'book_details'])->name('admin.book.details');

    Route::get('authors', [BookController::class, 'authors'])->name('admin.authors');
    Route::get('addauthor', [BookController::class, 'add_author'])->name('admin.add.author');
    Route::get('editauthor', [BookController::class, 'edit_author'])->name('admin.edit.author');
    Route::get('authordetails', [BookController::class, 'author_details'])->name('admin.author.details');

    Route::get('genres', [BookController::class, 'genres'])->name('admin.genres');
    Route::get('addgenre', [BookController::class, 'add_genre'])->name('admin.add.genre');
    Route::get('editgenre', [BookController::class, 'edit_genre'])->name('admin.edit.genre');
    Route::get('genredetails', [BookController::class, 'genre_details'])->name('admin.genre.details');

    Route::get('banners', [BannerController::class, 'banners'])->name('admin.banners');

});