<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'The Civil War Awakening', 'author' => 'AdamGoodheart', 'year' => 1861],
            ['title' => 'Countdown To War', 'author' => 'Richard Overy', 'year' => 1939],
            ['title' => 'The War Of Souls', 'author' => 'Whitely Strieber', 'year' => 2012],
            ['title' => 'The Navys War', 'author' => 'George C. Daughan', 'year' => 1812],
            ['title' => 'The Year Germany Lost The War', 'author' => 'Andrew Nagorski', 'year' => 1941],
        ];

        return view('books.index', ['books' => $books]);
    }
}