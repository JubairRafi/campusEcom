<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    protected $table = "commodities";
    protected $primaryKey =  "commoditiesId";
    public $timetamps = false;
}
