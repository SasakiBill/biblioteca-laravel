<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Loan;
use Illuminate\Support\Facades\DB;

class LoansController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function lbOperations(){
        $books = DB::table('books')->where('id')->get();
        
        return view('loans', ['books' => $books]);
        
    }
    
    public function create(Request $request){
        
    }
}
