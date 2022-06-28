<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OdersController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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
    return view('homepage');
})->name('home');
// Route::get('/register', function () {
//     return view('register');
// });



Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('oder', OdersController::class);
Auth::routes();

Route::get('/homeadmin', [HomeController::class, 'index'])->name('homeadmin');
