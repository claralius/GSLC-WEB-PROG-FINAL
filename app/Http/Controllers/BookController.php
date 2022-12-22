<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books_data = Book::all();

        return view('home', compact('books_data'));
    }

    public function book_details(Request $request){
        $book_details = Book::where('id', '=', $request->id)->first();
        return view('book_detail', compact('book_details'));
    }

}
