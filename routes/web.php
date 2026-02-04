<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return "Chào mừng đến với Laravel";
});

Route::get('/about', function () {
    return "Họ tên:Nguyễn Vũ Anh <br> Lớp:D18CNPM2 <br> MSSV: 23810310237";
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/tong/{a}/{b}', function ($a, $b) {
    $tong = $a + $b;
    return "Tổng của $a và $b là: $tong";
});
Route::get('/sinh-vien/{name}/{age?}', function ($name, $age = 20) {
    return "Tên sinh viên: $name <br> Tuổi: $age";
});
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return "Chào mừng Admin";
    });

    Route::get('/users', function () {
        return "Danh sách người dùng";
    });

});
Route::get('/check-date/{day}/{month}/{year}', function ($day, $month, $year) {
    return "Ngày hợp lệ: $day/$month/$year";
})->where([
    'day' => '(0?[1-9]|[12][0-9]|3[01])',
    'month' => '(0?[1-9]|1[0-2])',
    'year' => '[0-9]{4}',
]);
