<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('indexBook', 'detailBook');
    }


    public function createBook(){
        return view('book.createBook');
    }


    public function storeBook(BookRequest $request){

        // dd($request->all());

        //!MASS ASSIGNAMENT
        if($request->img == null){

            $book = Book::create(
                [
                    'title'=>$request->input('title'),
                    'author'=>$request->input('author'),
                    'year'=>$request->input('year'),
                    'trama'=>$request->input('trama'),
                    'img'=>'public/img/no_img_available.jpg',
                ]
            );

        }else{

            $book = Book::create(
                [
                    'title'=>$request->input('title'),
                    'author'=>$request->input('author'),
                    'year'=>$request->input('year'),
                    'trama'=>$request->input('trama'),
                    'img'=>$request->file('img')->store('public/img'),
                ]
            );

        }
        
        return redirect(route('indexBook'));
    }

    
    public function indexBook(Book $book){
        $books = Book::all();
        return view('book.indexBook', compact('books'));
    }


    public function detailBook(Book $book){
        return view('book.detailBook', compact('book'));
    }


    public function editBook(Book $book){
        return view('book.editBook', compact('book'));
    }

    
    public function updateBook(Book $book, Request $request){

        $book = update(
            [
                'title'=>$request->input('title'),
                'author'=>$request->input('author'),
                'year'=>$request->input('year'),
                'trama'=>$request->input('trama'),
                'img'=>$request->file('img')->store('public/img'),
            ]
        );

        return redirect(route('indexBook'));
    }






}













