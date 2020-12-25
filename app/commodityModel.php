<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commodityModel extends Model
{
    protected $table = "commodities";
    protected $primaryKey =  "studentId";
    public $timetamps = false;
}
