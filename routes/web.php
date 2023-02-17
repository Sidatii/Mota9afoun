<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;

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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index']);

Route::get('/books/{book}', [BookController::class, 'show']);

Route::get('/categories', [BookController::class, 'index']);

Route::get('/categories/{id}', function($id) {
     return view('category', [
         'categories' => Category::find($id)
     ]);
 });
