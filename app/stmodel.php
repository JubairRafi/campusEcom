<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stmodel extends Model
{
    //
    protected $table = "User_table";
    protected $primaryKey =  "studentId";
    public $timestamps  = false;
}
