<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

Route::view('/من-نحن', 'pages.about')->name('about');
Route::view('/تواصل-معنا', 'pages.contact')->name('contact');


Route::prefix('products')->name('products.')->group(function () {

    Route::get('/', [ProductController::class, 'index'])
        ->name('index');

    Route::get('/category/{slug}', [ProductController::class, 'category'])
        ->name('category');

    Route::get('/subcategory/{slug}', [ProductController::class, 'subcategory'])
        ->name('subcategory');

    Route::get('/{slug}', [ProductController::class, 'show'])
        ->name('show');

});

/*
|--------------------------------------------------------------------------
| Services
|--------------------------------------------------------------------------
*/

Route::get('/الخدمات', [ServiceController::class, 'index'])
    ->name('services.index');

Route::get('/الخدمات/{slug}', [ServiceController::class, 'show'])
    ->name('services.show');

/*
|--------------------------------------------------------------------------
| Posts
|--------------------------------------------------------------------------
*/

Route::get('/المقالات', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/المقالات/{slug}', [PostController::class, 'show'])
    ->name('posts.show');

/*
|--------------------------------------------------------------------------
| Contact
|--------------------------------------------------------------------------
*/

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');