<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'mainView'])->name('home');
Route::get('/about', [PagesController::class, 'aboutView'])->name('about');
Route::get('/catalog', [CatalogController::class, 'catalogView'])->name('catalog');
