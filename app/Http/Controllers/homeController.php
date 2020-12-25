<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stmodel;

class homeController extends Controller
{
    public function index(Request $req){
        $user = stmodel::where('studentId',$req->session()->get('username'))
                        ->get(); 
        return view('home.index')->with('user', $user);
    }
    public function about(){
        return view('home.about');
    }
}
