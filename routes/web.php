<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController as PageControllerAlias;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use \App\Http\Controllers\Profile\UserProfileController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\PageController;


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
    return view('dashboard');
})->name('dashboard');


Route::resource('users', UserProfileController::class);
Route::resource('news', NewsController::class);
Route::resource('posts', PostController::class);
Route::resource('find',FriendController::class);
Route::get('/pageuser/{userid}',[PageControllerAlias::class, 'index'])->name('page.index');
