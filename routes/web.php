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
Route::get('/', [MainController::class, 'get_decks'])->name('/');

Route::get('/card/search', [MainController::class, 'card_search'])->name('card/search');
Route::post('/card/search', [MainController::class, 'card_search'])->name('card/search');
Route::get('/card/search/error/card', [MainController::class, 'card_search_error_card'])->name('card/search/error/card');
Route::post('/card/search/error/card', [MainController::class, 'card_search_error_card'])->name('card/search/error/card');
Route::get('/card/search/error/deck', [MainController::class, 'card_search_error_deck'])->name('card/search/error/deck');
Route::post('/card/search/error/deck', [MainController::class, 'card_search_error_deck'])->name('card/search/error/deck');
Route::get('/card/search/error/exdeck', [MainController::class, 'card_search_error_exdeck'])->name('card/search/error/exdeck');
Route::post('/card/search/error/exdeck', [MainController::class, 'card_search_error_exdeck'])->name('card/search/error/exdeck');

Route::get('/search', [MainController::class, 'search_post'])->name('search');
Route::post('/post', [MainController::class, 'post'])->name('post');
Route::get('/post', [MainController::class, 'post'])->name('post');
Route::post('/deck', [MainController::class, 'get_cards'])->name('deck');
Route::post('/card/delete', [MainController::class, 'card_delete'])->name('card/delete');
Route::post('/deck/create', [MainController::class, 'deck_create'])->name('deck/create');
Route::post('/deck/delete', [MainController::class, 'deck_delete'])->name('deck/delete');

