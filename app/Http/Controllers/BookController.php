<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Exception;
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
            'books' => Book::latest()->filter(request(['tag', 'search']))->paginate(10),
            // This "latest" method orders data by the latest created, while filter() is a custom method that filters data by the search query. Furthermore, the paginate() method is used to paginate the data.
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        dd('create');
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
//        dd($request->all());

        $form = $request->validate([
            'name' => ['required', Rule::unique('book', 'name')],
            'author' => 'required',
            'published' => 'required',
            'description' => 'required',
            'link' => 'required',
            'tags' => 'required',
            'category_id' => 'required',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')){
            $form['image'] = $request->file('image')->store('images', 'public');
        }

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
    public function edit(Book $book)
    {
//        dd($book->name);
        return view('books.edit', [
            'books' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $form = $request->validate([
            'name' => '',
            'author' => '',
            'published' => '',
            'description' => '',
            'link' => '',
            'tags' => '',
            'category_id' => '',
            'image' => '',
        ]);

        if ($request->hasFile('image')){
            $form['image'] = $request->file('image')->store('images', 'public');
        }
        $book->update($form);

        return redirect('/books')->with('success', 'Book updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     * @throws Exception
     */
    public function destroy(Book $book): RedirectResponse
    {
        $book->archive();

        return redirect('/books')->with('success', 'Book archived successfully!');
    }

    public function manage(){
        return view('books.manage', [
            'books' => Book::latest()->paginate(10),
        ]);
    }

    public function read(Book $book): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('books.read', [
            'books' => $book
        ]);
    }
}
