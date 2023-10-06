<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function submit(Request $req)
    {
        $req->session()->put('data', $req->input()); // "data" is Session Key and $req->input() is Value to be stored in Session
        return redirect('profile'); // If session is Set, then redirect to Profile.Blade.php 
    }


}