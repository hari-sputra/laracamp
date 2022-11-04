<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('main');
});



Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('success-checkout', function () {
    return view('success_checkout');
})->name('success-checkout');

// sociallite
Route::get('google-login', [UserController::class, 'google'])->name('google.login');
Route::get('auth/google/callback', [UserController::class, 'googleCallback'])->name('google.login.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
