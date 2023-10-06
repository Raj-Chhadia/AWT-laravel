<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Users2;
use App\Http\Controllers\User3;
use App\Http\Controllers\dbcontrol;
use App\Http\Controllers\login;
use App\Http\Controllers\cookiecontrol;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/abc', function () {
    return view('abc');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/categories/{id}', function ($id) {
    return view('categories', ['id' => $id]);
});
Route::get("test", [Users::class, 'index']);

Route::get("test/{id}", [Users2::class, 'index']);

Route::get("mobiles/{id}", [User3::class, 'index']);

Route::get("dbsel", [dbcontrol::class, 'dbselect']);

Route::get("dbinsert", [dbcontrol::class, 'dbinsert']);

Route::get("dbupdate", [dbcontrol::class, 'dbupdate']);

Route::get("dbdelete", [dbcontrol::class, 'dbdelete']);

Route::get("dbmodel", [dbcontrol::class, 'dbmodel']);

// Route::get("signin", function () {
//     return view('signin');
// });

Route::view("signin", 'signin');

Route::post("signon", [login::class, 'submit']);

Route::view("profile", 'profile');

Route::get('profile', function () {
    if (!session()->has('data')) {
        return redirect('signin');
    } else {
        return view('profile');
    }
});

//logout
Route::get('/logout', function () {
    session()->forget('data');
    return redirect('signin');
});

Route::get('setcookie',[cookiecontrol::class, 'setcookie']);

Route::get('getcookie',[cookiecontrol::class, 'getcookie']);

// login crud dashboard redirect logut