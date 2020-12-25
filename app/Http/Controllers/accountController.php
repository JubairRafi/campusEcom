<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orderList;
use App\stmodel;
use App\commodityModel;

class accountController extends Controller
{
    public function index(){
        return view('home.my-account');
    }

    public function editLog(Request $req){
        $user = stmodel::where('studentId',$req->session()->get('username'))
                        ->get();    
        return view('myAccount.editPersonal')->with('user', $user);
    }

    public function updatePersonal( Request $req){

        $user = stmodel::where('studentId',$req->session()->get('username'))
                        ->first();

        $user->studentId     = $req->Username;
        $user->name          = $req->name;
        $user->password      = $req->password;
        $user->mobile        = $req->mobile;
        $user->collage       = $req->collage;
        $user->dormitory     = $req->dormitory;

        if ($user->save()) {
            return redirect()->route('myAccount');
        }else{
            return back();
        }
   
        
    }

    public function profilePic(Request $req){
        $user = stmodel::where('studentId',$req->session()->get('username'))
                        ->get();

        return view('myAccount.editProfilePic')->with('user', $user);
    }

    public function editProfilePic(Request $req){
        if ($req->hasFile('myPic')) {
            $file = $req->file('myPic');

            if($file->move('upload', $file->getClientOriginalName())){
        		
                $user = stmodel::where('studentId',$req->session()->get('username'))
                        ->first();
                
                $user->picture  = $file->getClientOriginalName();

                if($user->save()){
                    return redirect()->route('myAccount');
                }else{
                    return back();
                }

        	}else{
        		return back();
        	}
        }
    }

    public function orderList(Request $req){
        $order = orderList::where('studentId',$req->session()->get('username'))
                            ->get();
        
      
        return view('myAccount.orderlist')->with('order', $order);
    }

    public function personalCommodity(Request $req){
        $commodity = commodityModel::where('studentId',$req->session()->get('username'))
                            ->get();
        return view('myAccount.personalCommodity')->with('commodity', $commodity);
    }

    public function commodityDestroy($id){
   
        commodityModel::find($id)->delete($id);
      
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    public function sellInfo(Request $req){
        $user = commodityModel::where('studentId',$req->session()->get('username'))
                        ->get();    
       
        return view('myAccount.sellCommodity')->with('user', $user);
    }

    public function sellcommodity(Request $req){

        if ($req->hasFile('picture')) {
            $file = $req->file('picture');
            if ($file->move('upload', $file->getClientOriginalName())) {
                $commodity = new commodityModel();
       
                $commodity->studentId     = $req->studentID;
                $commodity->name          = $req->commodityName;
                $commodity->price         = $req->price;
                $commodity->quantity      = $req->quantity;
                $commodity->picture       = $file->getClientOriginalName();
               
        
        
                if($commodity->save()){
                    return redirect()->route('myAccount');
                }else{
                    return back();
                }
            }
        }
        
                    
    }

    public function cart(){
        return view('myAccount.cart');
    }
}
