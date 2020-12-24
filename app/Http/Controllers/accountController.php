<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orderList;

class accountController extends Controller
{
    public function index(){
        return view('home.my-account');
    }

    public function editLog(){
        return view('myAccount.editPersonal');
    }

    public function editProfilePic(){
        return view('myAccount.editProfilePic');
    }

    public function orderList(Request $req){
        $order = orderList::where('studentId',$req->session()->get('username'))
                            ->get();
        
      
        return view('myAccount.orderlist')->with('order', $order);
    }
}
