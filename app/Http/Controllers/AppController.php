<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index () {
        return view('index', [
            'title' => 'Book List',
            'books' => Book::all(),
            'categories' => Category::all()
        ]);
    }

    public function bookDetail (Book $book) {
        return view('detail', [
            'book' => $book,
            'categories' => Category::all()
        ]);
    }

    public function publishers () {
        return view('publisher_list', [
            'publishers' => Publisher::all(),
            'categories' => Category::all()
        ]);
    }

    public function publisher_detail (Publisher $pub) {
        return view('publisher_detail', [
            'pub' => $pub,
            'books' => $pub->books,
            'categories' => Category::all()
        ]);
    }

    public function category (Category $cat) {
        return view('category', [
            'cat' => $cat,
            'categories' => Category::all(),
            'books' => $cat->books
        ]);
    }

    public function contact () {
        return view('contact', [
            'categories' => Category::all()
        ]);
    } 
}
