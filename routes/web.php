<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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
// Show single book
Route::get('/books/{book}', [BookController::class, 'show']);
// Show all categories
Route::get('/categories', [BookController::class, 'index']);

Route::get('/categories/{id}', function ($id) {
    return view('category', [
        'categories' => Category::find($id)
    ]);
});
// Show single category
Route::get('/categories/{category}', [BookController::class, 'show']);
// Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
// Register user
Route::post('/register', [UserController::class, 'store']);
// Show login form
Route::get('/login', [UserController::class, 'loginForm'])->middleware('guest')->name('login');
// Login user
Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');


//##################################################################################################
Route::group(['middleware' => ['auth', 'active_user']], function () {
// Logout user
    Route::post('/logout', [UserController::class, 'logout']);
// Show create category form
    Route::get('/categories/create', [BookController::class, 'create']);
// Store category
    Route::post('/categories', [BookController::class, 'store']);
// Show edit category form
    Route::get('/categories/{category}/edit', [BookController::class, 'edit']);
// Update category
    Route::put('/categories/{category}', [BookController::class, 'update']);
// Delete category
    Route::delete('/categories/{category}', [BookController::class, 'destroy']);
// Show create book form
    Route::get('/books/create', [BookController::class, 'create']);
// Store book
    Route::post('/books', [BookController::class, 'store']);
// Show edit book form
    Route::get('/books/{book}/edit', [BookController::class, 'edit']);
// Update book
    Route::put('/books/{book}', [BookController::class, 'update']);
// Delete book
    Route::delete('/books/{book}', [BookController::class, 'destroy']);
// Show profile
    Route::get('/profile', [UserController::class, 'profile']);
// Update profile
    Route::post('/profile', [UserController::class, 'update']);
// Block profile
    Route::put('/profile', [UserController::class, 'destroy']);
// Manage books
    Route::get('/manage', [BookController::class, 'manage']);
});
