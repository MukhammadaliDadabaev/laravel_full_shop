<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Person\OrderController as PersonOrderController;
use App\Http\Controllers\ResetController;
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


Route::get('/reset', [ResetController::class, 'reset'])->name('reset');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('get-logout');

//------------------> MIDDLEWARE-GROUP
Route::middleware(['auth'])->group(function () {
	//-----------------------> PERSON controller
	Route::group(['prefix' => 'person', 'as' => 'person.'], function () {
		Route::get('/orders', [PersonOrderController::class, 'index'])->name('orders.index');
		Route::get('/orders/{order}', [PersonOrderController::class, 'show'])->name('orders.show');
	});
	//-------------------> AUTH-group
	Route::group(['prefix' => 'admin'], function () {
		//-----------------> USER admin-group
		// Route::group(['middleware' => 'is_admin'], function () {
		Route::get('/orders', [OrderController::class, 'index'])->name('home');
		Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
		// });
		//------------------> Resource
		Route::resource('categories', CategoryController::class);
		Route::resource('products', ProductController::class);
	});
});


Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');

Route::group(['prefix' => 'basket'], function () {
	Route::post('/add/{product}', [BasketController::class, 'basketAdd'])->name('basket-add');
	// Tavar
	Route::group(['middleware' => 'basket_not_empty', 'prefix' => 'basket'], function () {
		Route::get('/', [BasketController::class, 'basket'])->name('basket');
		Route::get('/place', [BasketController::class, 'basketPlace'])->name('basket-place');
		Route::post('/remove/{product}', [BasketController::class, 'basketRemove'])->name('basket-remove');
		Route::post('/place', [BasketController::class, 'basketConfirm'])->name('basket-confirm');
	});
});




Route::get('/{category}', [MainController::class, 'category'])->name('category');
Route::get('/{category}/{product}', [MainController::class, 'product'])->name('product');
