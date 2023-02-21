<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
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

// Show all books

Route::get('/books', [BookController::class, 'index']);


// Show create book form

Route::get('/books/create', [BookController::class, 'create'])->middleware('auth')->middleware('auth');


// Store book

Route::post('/books', [BookController::class, 'store'])->middleware('auth');

// Show edit book form

Route::get('/books/{book}/edit', [BookController::class, 'edit'])->middleware('auth');

// Update book

Route::put('/books/{book}', [BookController::class, 'update'])->middleware('auth');

// Delete book

Route::delete('/books/{book}', [BookController::class, 'destroy'])->middleware('auth');

// Show single book

Route::get('/books/{book}', [BookController::class, 'show']);

// Show all categories

Route::get('/categories', [BookController::class, 'index']);

Route::get('/categories/{id}', function($id) {
     return view('category', [
         'categories' => Category::find($id)
     ]);
 });

// Show create category form

Route::get('/categories/create', [BookController::class, 'create'])->middleware('auth');

// Store category

Route::post('/categories', [BookController::class, 'store'])->middleware('auth');

// Show edit category form

Route::get('/categories/{category}/edit', [BookController::class, 'edit'])->middleware('auth');

// Update category

Route::put('/categories/{category}', [BookController::class, 'update'])->middleware('auth');

// Delete category

Route::delete('/categories/{category}', [BookController::class, 'destroy'])->middleware('auth');

// Show single category

Route::get('/categories/{category}', [BookController::class, 'show']);

// Show register form

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Register user

Route::post('/register', [UserController::class, 'store']);

// Show login form

Route::get('/login', [UserController::class, 'loginForm'])->name('login')->middleware('guest');

// Login user

Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');

// Logout user

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

