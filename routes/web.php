<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

// AUTH-group
Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function () {
  // USER admin-group
  Route::group(['middleware' => 'is_admin'], function () {
    Route::get('/orders', [OrderController::class, 'index'])->name('home');
  });
});


Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');

Route::group(['prefix' => 'basket'], function () {
  Route::post('/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');
  // Tavar
  Route::group(['middleware' => 'basket_not_empty', 'prefix' => 'basket'], function () {
    Route::get('/', [BasketController::class, 'basket'])->name('basket');
    Route::get('/place', [BasketController::class, 'basketPlace'])->name('basket-place');
    Route::post('/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');
    Route::post('/place', [BasketController::class, 'basketConfirm'])->name('basket-confirm');
  });
});




Route::get('/{category}', [MainController::class, 'category'])->name('category');
Route::get('/{category}/{product}', [MainController::class, 'product'])->name('product');
