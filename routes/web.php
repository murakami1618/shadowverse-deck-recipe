<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardSearch;
use App\Http\Controllers\MainController;
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
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/card/search', [CardSearch::class, 'card_search'])->name('card/search');
Route::post('/card/search', [CardSearch::class, 'card_search'])->name('card/search');
Route::get('/search', [CardSearch::class, 'search_post']);
Route::get('/', [MainController::class, 'get_decks'])->name('/');
