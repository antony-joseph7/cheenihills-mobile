<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\ContactsController;
use App\Http\Controllers\Dashboard\FormDataController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'web.'], function () {

    Route::get('about', [HomeController::class, 'about'])->name('about');
    Route::get('contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('videos-gallery', [HomeController::class, 'videosgallery'])->name('videos-gallery');
    Route::get('accommodation', [HomeController::class, 'rooms'])->name('rooms');
    Route::get('private-villa-in-kanthalloor', [HomeController::class, 'cottage'])->name('cottage-rooms');
    Route::get('wooden-rooms-in-Kanthalloor', [HomeController::class, 'woodenhut'])->name('wooden-rooms');
    Route::get('premium-villa-in-kanthallor', [HomeController::class, 'premiumvilla'])->name('private-villa-rooms');
    Route::get('single-cattage-in-kanthalloor', [HomeController::class, 'single_cottage'])->name('single-cottage');
    Route::get('double-cottage-in-kanthalloor', [HomeController::class, 'double_cottage'])->name('double-cottage');
    Route::get('glass-house-in-kanthalloor', [HomeController::class, 'glass_house'])->name('glass-house');
    Route::post('contact/store', [FormDataController::class, 'store'])->name('contact.store');


});
