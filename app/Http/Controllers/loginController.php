<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stmodel;

class loginController extends Controller
{
    //
    function index(){
        //echo "Success";
        return view('login.index');
    }
    public function verify(Request $req){
        $users=stmodel::where('studentId',$req->username)
                ->where('password', $req->pass)
                ->get();
                if(count($users) > 0){
                    $req->session()->put('username', $req->username);
                    $req->session()->put('type', $req->username);
                    $req->session()->put('logged', 'logged');
                    
                    return redirect('/');
                }else{
                    $req->session()->flash('msg', 'invalid username or password');
                    return redirect('/login');
                }
    }

}
