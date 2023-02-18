<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', [
            'books' => Book::latest()->filter(request(['tag', 'search']))->get()
            // This "latest" method orders data by the latest created, while filter() is a custom method that filters data by the search query.
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = $request->validate([
            'name' => ['required', Rule::unique('book', 'name')],
            'author' => 'required',
            'year' => 'required',
            'description' => 'required',
            'link' => 'required',
            'tags' => 'required',
            'image' => 'required',
        ]);

        Book::create($form);

        return redirect('/books')->with('success', 'Book added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('books.show', [
            'books' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book): RedirectResponse
    {
        //
    }
}
