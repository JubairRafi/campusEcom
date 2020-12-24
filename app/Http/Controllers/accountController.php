<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function orderList(){
        return view('myAccount.orderlist');
    }
}
