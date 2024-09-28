<?php

use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'welcome']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/not-found', [PageController::class, 'notFound']);
Route::get('/plans', [PageController::class, 'plans']);

Route::get('/user/{id}', [PageController::class, 'showUser']);

Route::get('/redirect', RedirectController::class);