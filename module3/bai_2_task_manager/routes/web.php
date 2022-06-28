<?php

use App\Http\Controllers\TaskController;
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
Route::get('/', function () {
    return view('customer.index');
});
// Route::prefix('customer')->group(function () {

//     Route::get(
//         'index',
//         [TaskController::class, 'index']
//         // Hiển thị danh sách khách hàng
//     );

//     Route::get(
//         'create',
//         [TaskController::class, 'create']
//         // Hiển thị Form tạo khách hàng
//     );

//     Route::post(
//         'store',
//         [TaskController::class, 'store']
//         // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
//     );

//     Route::get(
//         '{id}/show',
//         [TaskController::class, 'show']
//         // Hiển thị thông tin chi tiết khách hàng có mã định danh id
//     );

//     Route::get(
//         '{id?}/edit',
//         [TaskController::class, 'edit']
//         // Hiển thị Form chỉnh sửa thông tin khách hàng
//     );

//     Route::patch(
//         '{id?}update',
//         [TaskController::class, 'update']
//         // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
//     )->name('customer.update');

//     Route::delete(
//         '{id}',
//         [TaskController::class, 'delete']
//         // Xóa thông tin dữ liệu khách hàng
//     );
// });