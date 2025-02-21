<?php

use Illuminate\Support\Facades\Route;
// get / mà không ghi gì mặc định nó sẽ vào trang chủ
Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\ControllerTong;
use App\Http\Controllers\NameController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TypecodeController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\Vidu2Controller;
use App\Http\Controllers\Vidu3Controller;

Route::get('/tong', [ControllerTong::class, 'index']);
//thiết kế cái file html
Route::post('/tinhtong', [ControllerTong::class, 'tinhTong']);


Route::get('/vidu1', function() {
    return "Hello";
});

Route::get('/vidu2', [Vidu2Controller::class, 'vidu2']);
Route::get('/vidu3', [Vidu3Controller::class, 'vidu3']);

// Thêm sản phẩm
Route::get('/vidu2', [Vidu2Controller::class, 'vidu2']) ->name('add-product');



Route::group(['prefix' => 'tutorial'], function()
{
    Route::get('/aws', function()
    {
        echo "aws tutorial";
    });

    Route::get('/jira', function()
    {
        echo "jira tutorial";
    });

    Route::get('/testng', function()
    {
        echo "testng tutorial";
    });
});


Route::resource('/vtc', PostController::class);
Route::get('/vtc1', [PostController::class, 'create']);

Route::get('/show', [NameController::class, 'show']);
Route::post('/show', [NameController::class, 'displayInfor']);
Route::post('/clear', function () {
    session()->forget('users');
    return redirect('/show');
});


Route::get('/covid', [TypecodeController::class, 'getData']);

