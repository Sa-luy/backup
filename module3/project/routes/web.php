<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ProductController;
use App\Models\User;
use App\Models\Review;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/index', function () {
    return view('Admin.home');
});
Route::get('/products', function () {
    return view('Admin.products.index');
});
Route::get('/login', function () {
    return view('Admin.login');
});
// Route::post('/login',function(){
//     //     return view('')
// });
// Route::get('/', function () {
//     return view('index');
// });
Route::post('/login', [AdminController::class, 'validationEmail'])->name('checkemail');
Route::get('getUser1', function () {
    $phone = User::find(1)->phone;
    dd($phone);
});
Route::get('getReview', function () {
    $user = User::find(1)->review->toArray();
    dd($user);
});
Route::get('reviewer', function () {
    $review = Review::find(1)->user->toArray();
    dd($review);
});
// Route::get('permission', function(){
//     $permission=Review::find(1)->user->toArray();
//     dd($permission);
// });
Route::get('permission', function () {
    $permission = User::find(1)->permission->toArray();
    dd($permission);
});
Route::resource('products', ProductController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
