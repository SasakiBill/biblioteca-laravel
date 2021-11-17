<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller{
    /*public function dbOperations(){
        return "teste";
    }*/
    public function dbOperations(){
        $books = DB::table('books')->get();
        
        return view('library', ['books' => $books]);
    }

    public function addToLoan($id){
        $books = Book::find($id);
        $loan = session()->get('loan');

        $loan[$id] = [
            "id" => $books->id,
            "name" => $books->name,
        ];


    }
    
}
