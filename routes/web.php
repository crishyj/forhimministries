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
Route::get('/donation', [App\Http\Controllers\HomeController::class, 'donation'])->name('donation');

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin_blog', [App\Http\Controllers\AdminController::class, 'blogIndex'])->name('blog.index');
Route::get('/blogCreate', [App\Http\Controllers\AdminController::class, 'blogCreate'])->name('blog.create');
Route::post('/blogStore', [App\Http\Controllers\AdminController::class, 'blogStore'])->name('blog.store');
Route::post('/admin_blog', [App\Http\Controllers\AdminController::class, 'blogUpdate'])->name('blog.update');
Route::get('/admin_blog/delete/{id}', [App\Http\Controllers\AdminController::class, 'blogDelete'])->name('blog.delete');


Route::get('/admin_vlog', [App\Http\Controllers\AdminController::class, 'vlogIndex'])->name('vlog.index');
Route::get('/vlogCreate', [App\Http\Controllers\AdminController::class, 'vlogCreate'])->name('vlog.create');
Route::post('/vlogStore', [App\Http\Controllers\AdminController::class, 'vlogStore'])->name('vlog.store');
Route::post('/admin_vlog', [App\Http\Controllers\AdminController::class, 'vlogUpdate'])->name('vlog.update');
Route::get('/admin_vlog/delete/{id}', [App\Http\Controllers\AdminController::class, 'vlogDelete'])->name('vlog.delete');

Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/vlog', [App\Http\Controllers\HomeController::class, 'vlog'])->name('vlog');

Route::get('/changepassword', [App\Http\Controllers\AdminController::class, 'changepassword'])->name('changepassword');
Route::post('/changepassword', [App\Http\Controllers\AdminController::class, 'resetpassword'])->name('resetpassword');

// Auth::routes();


