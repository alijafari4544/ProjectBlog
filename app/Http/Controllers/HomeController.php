<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $userType=Auth()->user()->user_type;
            if($userType=='user'){
                return view('dashboard');
            }elseif ($userType=='admin'){
                return  view('admin.adminHome');
            }
        }
        else{
            return  redirect()->back();
        }
    }
}
