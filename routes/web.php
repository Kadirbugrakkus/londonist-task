<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FrontEnd\ContactFormController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ContactFormController::class, 'index'])->name('contact.index');

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::middleware('auth')->group(function () {
        Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');

        Route::get('/contact', [ContactController::class, 'index'])->name('contact.index')->middleware('permission:view contacts');
        //Route::post('/contact', [ContactController::class, 'store'])->name('contact.store')->middleware('permission:create contact');
        Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contact.show')->middleware('permission:view contacts');
        Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.store')->middleware('permission:edit contact');
        Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy')->middleware('permission:delete contact');

        Route::get('users', [UserController::class, 'index'])->name('users.index')->middleware('permission:view users');
        Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show')->middleware('permission:view users');
        Route::put('/users/{id}', [UserController::class, 'update'])->name('users.store')->middleware('permission:edit users');
        Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('permission:delete users');


        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });

});
