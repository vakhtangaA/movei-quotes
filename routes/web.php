<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;

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

Route::group(['middleware' => 'language'], function () {
	Route::get('/', [MovieController::class, 'index'])->name('home');

	Route::get('/{movie}', [QuoteController::class, 'index'])->name('movie');

	Route::prefix('admin')->middleware('admin')->group(function () {
		Route::redirect('/', '/admin/dashboard');
		Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

		Route::prefix('movies')->group(function () {
			Route::post('create', [AdminController::class, 'store'])->name('createMovie');
			Route::delete('{movie}', [AdminController::class, 'destroy'])->name('deleteMovie');
			Route::patch('{movie}', [AdminController::class, 'update'])->name('updateMovie');
		});

		Route::prefix('quotes')->group(function () {
			Route::post('create', [QuoteController::class, 'store'])->name('createQuote');

			Route::delete('{quote}', [QuoteController::class, 'destroy'])->name('deleteQuote');

			Route::patch('{quote}', [QuoteController::class, 'update'])->name('updateQuote');
		});
	});
});

Route::get('/login', [LoginController::class, 'showLogin'])->name('loginShow');

Route::post('/login', [LoginController::class, 'authenticate'])->name('loginPost');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('setlocale/{locale}', [LanguageController::class, 'index'])->name('setLocale');
