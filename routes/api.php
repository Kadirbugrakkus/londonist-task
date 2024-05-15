<?php

use App\Http\Controllers\FrontEnd\ContactFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EmailController;


Route::post('/', [ContactFormController::class, 'store'])->name('api.contact.store');
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('api.send-email')->middleware('auth:api');



