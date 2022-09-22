<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Livewire\Books;
use App\Models\Author;
use App\Models\Book;
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
Route::get('/testing', function(){
    return Author::query()->with(['books'])->get();
});

Route::get('/', function () {
    return view('app');
});

Route::prefix('books')->group(function(){
    Route::view('', 'pages.books.books');

    Route::get('create', [BookController::class, 'create']);

    Route::post('store', [BookController::class, 'store']);
});

Route::prefix('authors')->group(function(){
    Route::get('create', [AuthorController::class, 'create']);

    Route::get('{author_id}', [AuthorController::class, 'show']);

    Route::post('store', [AuthorController::class, 'store']);
});
