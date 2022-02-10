<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

Route::get('view', [LanguageController::class, 'view'])->name('view');
Route::get('language-change', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/posts', PostController::class)->middleware(['auth']);

//Si la ruta no existe puedo indicar qué vista mostrar
Route::fallback(function(){
    return view('/posts.create');
});

require __DIR__.'/auth.php';
