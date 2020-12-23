<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index(){
        return view('register.index');
    }
    public function signUp(Request $req){
        //return view('register.index');
        $username= $req->Username;
        $name= $req->name;
        $password= $req->password;
        $gender= $req->gender;
        $collage= $req->collage;
        $dormitory= $req->dormitory;
        $data = array('studentId'=>$username,
                    'name'=>$name,
                    'password'=>$password,
                    'sex'=>$gender,
                    'collage'=>$collage,
                    'dormitory'=>$dormitory);
                    
    }
}
