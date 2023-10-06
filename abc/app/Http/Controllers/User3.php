<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User3 extends Controller
{
    public function index($id)
    {
        return view('mobiles');
    }
}
