<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TampilanController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [TampilanController::class, 'index'])->name('tampilan');
});

//Artikel
Route::get('user/artikel', [PostController::class, 'index'])->name('artikel');
Route::resource('posts', PostController::class);

//images
Route::get('user/image', [ImageController::class, 'index'])->name('image');
Route::resource('images', ImageController::class);

//View Page
