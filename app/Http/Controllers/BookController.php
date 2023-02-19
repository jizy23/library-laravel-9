<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function createBook(){
        return view('book.createBook');
    }

    public function storeBook(Request $request){

        // dd($request->all());

        $book = Book::create(
            [
                'title'=>$request->input('title'),
                'author'=>$request->input('author'),
                'year'=>$request->input('year'),
                'trama'=>$request->input('trama'),
            ]
        );

        return redirect(route('indexBook'));

    }

    public function indexBook(){
        $books = Book::all();
        return view('book.indexBook', compact('books'));
    }


}
