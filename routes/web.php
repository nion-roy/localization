<?php

use Illuminate\Support\Facades\Route;


Route::get('bangla', [App\Http\Controllers\LanguageController::class, 'bangla'])->name('bangla.language');
Route::get('english', [App\Http\Controllers\LanguageController::class, 'english'])->name('english.language');


Route::resource('post', App\Http\Controllers\PostController::class);
