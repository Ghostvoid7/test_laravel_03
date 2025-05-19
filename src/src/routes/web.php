<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'welcome']);
Route::get('/generic', [SiteController::class, 'generic']);
Route::get('/elements', [SiteController::class, 'elements']);
Route::get('/posts', [SiteController::class, 'posts']);
