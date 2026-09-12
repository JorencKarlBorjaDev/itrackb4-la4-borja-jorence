<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', ['books' => $this->books()]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books = $this->books();

        if (!isset($books[$id]))
        {
            abort(404);
        }
        return view('books.show', ['book' => $books[$id]]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function featured()
    {
        $books = $this->books();
        $book = $books[1];

        return view('books.featured', ['book' => $book]);
    }
    public function filter($genre = null)
    {
        $books = $this->books();

        if ($genre === null) {

        return view('books.filter', ['books' => $books, 'genre' => null]);
    }
        $filteredBooks = [];

        foreach ($books as $book) {

        if (strcasecmp($book['genre'], $genre) === 0) {
            $filteredBooks[] = $book;
        }
    }
        return view('books.filter', ['books' => $filteredBooks, 'genre' => $genre]);
    }
    private function books()
    {
        return [
            1 => ['id' => 1, 'title' => 'The Civil War Awakening', 'author' => 'Adam Goodheart', 'year' => 1861, 'genre' => 'History'],
            2 => ['id' => 2, 'title' => 'Countdown To War', 'author' => 'Richard Overy', 'year' => 1939, 'genre' => 'History'],
            3 => ['id' => 3, 'title' => 'The War Of Souls', 'author' => 'Whitley Strieber', 'year' => 2012, 'genre' => 'Fiction'], 
            4 => ['id' => 4, 'title' => 'The Navys War', 'author' => 'George C. Daughan', 'year' => 1812, 'genre' => 'History'],
            5 => ['id' => 5, 'title' => 'The Year Germany Lost The War', 'author' => 'Andrew Nagorski', 'year' => 1941, 'genre' => 'History'],
            6 => ['id' => 6, 'title' => 'War and Peace', 'author' => 'Leo Tolstoy', 'year' => 1869, 'genre' => 'Fiction'],
        ];
    }
}

