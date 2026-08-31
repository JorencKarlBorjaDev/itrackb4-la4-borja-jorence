<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index', ['books' => $this->books()]);
    }


    public function show ($id)
    {
        $books = $this->books();

        if (!isset($books[$id]))
        {
            abort(404);
        }
        return view('books.show', ['book' => $books[$id]]);
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