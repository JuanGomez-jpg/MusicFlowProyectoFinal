<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\SongController;

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
/*
Route::get('/', function () {
    return view('terms');
});*/
Route::redirect('/', 'login');

Route::post('albums/{album}/add-song', [AlbumsController::class, 'addSong'])->name('albums.add-song');
Route::resource('songs', SongController::class)->middleware('auth');
Route::resource('albums', AlbumsController::class)->middleware('auth');
//Route::get('albums/create', [AlbumsController::class, 'create']);
//Route::get('albums', [AlbumsController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);/*->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/
