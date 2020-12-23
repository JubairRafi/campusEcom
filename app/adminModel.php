<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminModel extends Model
{
    //
    protected $table = "administrators";
    protected $primaryKey =  "teacherId";
    public $timetamps = false;
}
