<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderList extends Model
{
    protected $table = "orderlist";
    protected $primaryKey = "orderid";
    public $timetamps = false;
}

