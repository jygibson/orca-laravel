<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function programs(){
        return view ('programs');
    }

    public function join(){
        return view ('register');
    }

    public function contact(){
        return view ('contact');
    }
}

