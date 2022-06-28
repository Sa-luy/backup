<?php

use App\Http\Controllers\PopulationsController;
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

// Tạo 1 nhóm route với tiền tố customer
// Route::prefix('customer')->group(function () {

//     Route::get('index', function () {
//         // Hiển thị danh sách
//         return view('modules.customer.index');
//     });

//     Route::get('create', function () {
//         // Hiển thị Form tạo
//     });

//     Route::post('store', function () {
//         // Xử lý lưu dữ liệu tạo thong qua phương thức POST từ form
//     });

//     Route::get('{id}/show', function () {
//         // Hiển thị thông tin chi tiết có mã định danh id
//     });

//     Route::get('{id}/edit', function () {
//         // Hiển thị Form chỉnh sửa thông tin
//     });

//     Route::patch('{id}/update', function () {
//         // xử lý lưu dữ liệu thông tin được chỉnh sửa thông qua PATCH từ form
//     });

//     Route::delete('{id}', function () {
//         // Xóa thông tin dữ liệu
//     });
// });
Route::resource('populations', PopulationsController::class);