<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
 

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


//========== Rutas para verificación de email=======================
Route::get('/email/verify', function() {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
//================================================================================================


// Home
Route::redirect('/', 'login');
///////////////////////////////


Route::post('albums/{album}/add-song', [AlbumsController::class, 'addSong'])->name('albums.add-song');
Route::resource('songs', SongController::class)->middleware(['auth', 'verified']);
Route::resource('albums', AlbumsController::class)->middleware(['auth', 'verified']);

Route::resource('shopping-cart', PurchaseController::class)->middleware(['auth', 'verified']);

Route::get('shopping-cart/{album}/add-purchase', [PurchaseController::class, 'create'])->name('add-purchase');
Route::post('shopping-cart/{album}/store-purchase', [PurchaseController::class, 'store'])->name('store-purchase');
Route::delete('shopping-cart/{purchase}/delete-purchase', [PurchaseController::class, 'destroy'])->name('destroy-purchase');



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
