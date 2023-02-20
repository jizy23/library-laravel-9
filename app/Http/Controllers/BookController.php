<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function createBook(){
        return view('book.createBook');
    }

    public function storeBook(BookRequest $request){

        // dd($request->all());

        //!MASS ASSIGNAMENT
        
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

    
    public function indexBook(Book $book){
        $books = Book::all();
        return view('book.indexBook', compact('books'));
    }


    public function detailBook(Book $book){
        return view('book.detailBook', compact('book'));
    }


}
