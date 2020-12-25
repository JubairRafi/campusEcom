<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productModel;

class homeController extends Controller
{
    public function index(){

        $Products = productModel::all();

        return view('home.index')->with('data', $Products);
    }
    public function about(){
        return view('home.about');
    }
}
