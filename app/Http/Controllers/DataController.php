<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function adminData(){
        $users = DB::table('users')->select('name','email','phone','program','disability')->get();

        return view('admin', ['users' => $users]);
    }
    public function userData(){
        $users = DB::table('users')->select('name','email','phone','program','disability')->get();

        return view('home', ['users' => $users]);
    }
}
