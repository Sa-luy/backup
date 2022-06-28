<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SessionController;
use App\Models\Category;
use Illuminate\Contracts\Session\Session;
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

Route::get('/', function () {
    return view('admin.admin');
})->name('admin');
Route::get('login', [\App\Http\Controllers\LoginController::class, 'showFormLogin'])->name('auth.showFormLogin');



Route::post('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('auth.login');



Route::get('home', function () {

    return view('home');
})->name('home.index');


Route::resource('product', ProductsController::class);
Route::resource('category', CategoryController::class);  //xong
Route::resource('customer', CustomersController::class);
// Route::resource('product',ProductsController::class);
// Route::resource('product',ProductsController::class);
// Route::resource('product',ProductsController::class);
Route::get('sesion/store', [SessionController::class, 'store']);
Route::get('sesion/show', [SessionController::class, 'show']);