<?php

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

// Route::get('/', function () {
//     return view('home');
// });
Auth::routes(['verify' => true]);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/salvation', [App\Http\Controllers\HomeController::class, 'salvation'])->name('salvation');
Route::post('/salvation', [App\Http\Controllers\HomeController::class, 'salvation_store'])->name('salvation_store');
Route::get('/salvation_completed', [App\Http\Controllers\HomeController::class, 'salvation_completed'])->name('salvation_completed');

Route::get('/prayer', [App\Http\Controllers\HomeController::class, 'prayer'])->name('prayer');
Route::post('/prayer', [App\Http\Controllers\HomeController::class, 'prayer_store'])->name('prayer_store');
Route::get('/prayer_completed', [App\Http\Controllers\HomeController::class, 'prayer_completed'])->name('prayer_completed');

Route::get('/about_vision', [App\Http\Controllers\HomeController::class, 'about_vision'])->name('about_vision');
Route::get('/pastor_steve', [App\Http\Controllers\HomeController::class, 'pastor_steve'])->name('pastor_steve');
Route::get('/pending', [App\Http\Controllers\HomeController::class, 'pending'])->name('pending');

// Auth::routes();


