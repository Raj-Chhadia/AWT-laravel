<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class cookiecontrol extends Controller
{
    public function setcookie(Request $req)
    {
        // How Long Cookie Should Remain in minutes
        $minutes = 5;
        // Response message of the cookie
        $response = new Response('Hello Students');
        //set cookie and its value
        $response->withCookie(cookie('name', 'Marwadi University ', $minutes));
        $response->withCookie(cookie('address', 'Rajkot', $minutes));
        // set cookie
        return $response;
    }

    public function getcookie(Request $req)
    {
        // Retrieve value of name Cookie
        $result = $req->cookie('name');
        // Retrieve value of address Cookie
        $result1 = $req->cookie('address');
        // Print values of Cookies
        echo $result;
        echo $result1;

    }
}