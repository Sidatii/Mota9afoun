<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;
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
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
// Admin routes
    Route::group(['middleware' => ['admin']], function () {

    // Route resource for categories
        Route::resource('categories', CategoryController::class);

    // Route resource for books
        Route::resource('books', BookController::class)->only(['store', 'edit', 'update', 'destroy']);
    // Show create book form
        Route::get('/book/create', [BookController::class, 'create']);
    // Read book
        Route::get('/book/{book}/read', [BookController::class, 'read']);
    // Show all users
        Route::get('/users', [UserController::class, 'index']);
    });

// Rout resource for profile
    Route::resource('profile', UserController::class);

// Show favorites by user
    Route::get('/favorites', [FavoriteController::class, 'index']);
// Add book to favorite
    Route::post('/books/{book}/favorite', [FavoriteController::class, 'store']);
// Remove book from favorite
    Route::delete('/books/{book}/favorite', [FavoriteController::class, 'destroy']);
// Show all groups
// Rout resource for groups
    Route::resource('groups', GroupController::class);
// Join group
    Route::post('/groups/{group}/join', [GroupController::class, 'join']);
// Leave group
//    Route::delete('/groups/{group}/leave', [GroupController::class, 'leave']);
// Route resource for comments
    Route::resource('comments', CommentController::class);


});
