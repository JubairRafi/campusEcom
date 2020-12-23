<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stmodel;

class registerController extends Controller
{
    public function index(){
        return view('register.index');
    }
    public function signUp(Request $req){
        $user = new stmodel();
       

        $user->studentId     = $req->Username;
        $user->name          = $req->name;
        $user->password      = $req->password;
        $user->sex           = $req->gender;
        $user->major         = 'unselect';
        $user->collage       = $req->collage;
        $user->dormitory     = $req->dormitory;



        if($user->save()){
            return redirect()->route('login');
        }else{
            return back();
        }
                    
    }
}
