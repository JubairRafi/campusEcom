<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productModel;
use App\stmodel;

class homeController extends Controller
{
    public function index(Request $req){
        $user = stmodel::where('studentId',$req->session()->get('username'))
                        ->get(); 
         $Products = productModel::all();

        return view('home.index')->with('user', $user)->with('data', $Products);
    }
    public function about(){
        return view('home.about');
    }
}
