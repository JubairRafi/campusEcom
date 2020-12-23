<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adminModel;

class adminController extends Controller
{
    //
    function index(){
        //echo "Success";
        return view('login.admin');
    }
    public function verify(Request $req){
        $users=adminModel::where('teacherId',$req->username)
                ->where('password', $req->pass)
                ->get();
                if(count($users) > 0){
                    $req->session()->put('username', $req->username);
                    $req->session()->put('type', $req->username);
                    
                    return redirect('/');
                }else{
                    $req->session()->flash('msg', 'invalid username or password');
                    return redirect('/login');
                }
    }
    
}
