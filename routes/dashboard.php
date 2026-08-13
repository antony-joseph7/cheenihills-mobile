<?php


use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\FormDataController;
use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\SeoDataController;


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin'])->name('doLogin');

Route::middleware('auth')->group(function () {

    Route::get('/', [IndexController::class, 'index'])->name('index');


    Route::resource('seo-data', SeoDataController::class)->parameters([
        'seo-data' => 'seo_data'
    ]);

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');


 

    Route::resource('form-data', FormDataController::class)->parameters([
        'form-data' => 'form_data'
    ]);

});
