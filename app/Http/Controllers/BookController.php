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

        if (!$loan){
            $loan = [
                $id =>[
                    "id" => $books->id,
                    "quantity" => 1,
                    "name" => $books->name,
                    "description" => $books->description,
                    "author" => $books->author,
                    "category" => $books->category,
                    "book_status" => $books->book_status,
                ]
            ];

            session()->put('loan', $loan);

            return redirect()->back()->with('Sucesso', 'Livro Alugado!');
        }

        if (isset($loan[$id])){
            $loan[$id]['quantity']++;
            session()->put('loan', $loan);

            return redirect()->back()->with('Sucesso', 'Produto Adicionado com Sucesso');
        }

        $loan[$id] = [
            "id" => $books->id,
            "quantity" => 1,
            "name" => $books->name,
            "description" => $books->description,
            "author" => $books->author,
            "category" => $books->category,
            "book_status" => $books->book_status,
        ];

        session()->put('loan', $loan);

        return redirect()->back()->with('Sucesso', 'Livro Alugado!');
    }


    public function remove(Request $request){
        if($request-> id){
            $loan = session()->get('loan');
            if(isset($loan[$request->id])){
                unset($loan[$request->id]);
                session()->put('loan', $loan);
            }

            session()->flash('Sucesso', 'Livro Alugado');
        }
    } 

    public function update(Request $request){
        if($request->id and $request->quantity){
            $loan = session()->get('loan');

            $loan[$request->id]["quantity"] = $request->quantity;

            session()->put('loan', $loan);

            session()->flash('success', 'Cart updated successfully');
        }
    }
}