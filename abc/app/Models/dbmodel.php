<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbmodel extends Model
{
    protected $table = 'user_table';

    function getname(){
        return $this->name;
    }
}
