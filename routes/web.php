<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Task 5
Route::get('/', [PostController::class, 'postAction']);

// Task 7
Route::get('/posts/{id}/delete', [PostController::class, 'postActionDelete']);

// Task 9
Route::get('/posts', [PostController::class, 'postView']);

// Task 10
Route::get('/categories/{id}/posts', [CategoryController::class, 'getPostsByCategory']);

// Task 12
//Route::get('/categories/{id}/latest-post', [CategoryController::class, 'getLatestPostByCategory']);
