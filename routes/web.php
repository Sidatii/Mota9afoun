<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
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
    return ;
});

Route::get('/books/{id}', function ($id){
    return response('books' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request){
    dd($request->book . '' . $request->category);
});

Route::get('/books', function(){
    return view('books', [
        'title' => 'Mota9afoun',
        'books' => Book::all()
    ]);
});

Route::get('/books/{id}', function($id){
    return view('book', [
        'title' => 'Mota9afoun',
        'books' => Book::find($id)
    ]);
});
