<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home',[IndexController::class, 'index'])->name('home');
Route::get('/addNewSongs',[IndexController::class, 'addNewSongs'])->name('addNewSongs');
Route::post('/uploadSongs',[IndexController::class, 'uploadSongs'])->name('uploadSongs');
Route::post('/uploadArtists',[IndexController::class, 'uploadArtists'])->name('uploadArtists');

