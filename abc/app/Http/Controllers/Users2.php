<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users2 extends Controller
{
    public function index($id)
    {
        echo 'Some statements';
        echo 'ID is:', $id;
    }
}
