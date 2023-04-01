<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Favorite;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        // Show favorites
        $favorites = Favorite::where('user_id', auth()->user()->id)->join('book', 'book.id', '=', 'favorites.book_id')->join('category', 'category.id', '=', 'book.category_id')->select('book.*', 'category.name as category_name', 'favorites.book_id')->get();
//        dd($favorites);
        return view('favorites.index', [
            'favorites' => $favorites,
        ]);
    }

    // Check if book is in favorites
    public function isInFavorite(Book $book): bool
    {
        // check if book is in favorites
        $favorite = Favorite::where('user_id', auth()->user()->id)->where('book_id', $book->id)->first();
        if ($favorite) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Book $book)
    {
//        dd($book->id);
        // add book to favorites table
        $favorite = new Favorite();
        $favorite->user_id = auth()->user()->id;
        $favorite->book_id = $book->id;
        $favorite->save();
        return redirect()->back()->with('success', 'Book added to favorites');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        // Remove book from favourites
        $favorite = new Favorite();
        $favorite->user_id = auth()->user()->id;
        $favorite->book_id = $book->id;
        $favorite->where('user_id', $favorite->user_id)->where('book_id', $favorite->book_id)->delete();
        return redirect()->back()->with('success', 'book removed from favorites');
    }
}
