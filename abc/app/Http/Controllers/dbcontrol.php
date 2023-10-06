<?php

namespace App\Http\Controllers;

use App\Models\dbmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbcontrol extends Controller
{
    public function dbmodel(){
        return dbmodel::all();
    }
    public function dbselect(){
        $a = DB::select('select * from user_table');
        echo '<pre>';
        print_r($a);
        // return DB::select('select * from user_table');

        // $b = DB::table('user_table')
        // ->where('name','Raj')
        // ->get();
        // echo '<pre>';
        // print_r($b);

        // $c = DB::table('user_table')->find(1);
        // echo '<pre>';
        // print_r($c);

        // $d = DB::table('user_table')->count();
        // echo '<pre>';
        // print_r('Number of entries: '.$d);
    }

    public function dbinsert(){
        $e = DB::table('user_table')->insert([
                'name' => 'Akhilesh',
                'email' => 'akhilesh@gmail.com',
                'address' => 'rajkot'
            ]);
        echo '<pre>';
        print_r($e);
    }

    public function dbupdate(){
        $f = DB::table('user_table')
        ->where('id',2)
        ->update([
            'name' => 'viral',
            'email' => 'viral@gmail.com',
            'address' => 'rajkot'
        ]);
        echo '<pre>';
        print_r($f);
    }

    public function dbdelete(){
        $g = DB::table('user_table')
        ->where('id',6)
        ->delete();
        echo '<pre>';
        print_r($g);
    }
}
