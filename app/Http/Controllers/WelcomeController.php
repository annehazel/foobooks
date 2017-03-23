<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
    * GET
    * /books
    **/
    public function index(){
        return view('welcome'); 
    }
}
