<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    
    /**
    * GET
    * /books
    **/
    public function index(){
         return 'you want to view all the books...'; 
    }
    
    /**
    * GET
    * /books/{title?}
    **/    
    public function view($title = null){
        
        return 'you want to view the book '.$title;
        
    }
    
}
