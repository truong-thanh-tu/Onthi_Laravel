<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Loginrequest;

class ControllerLogin extends Controller
{
   public function login_show(){
       return view('Login.login');
   }
   public function login_handling( Loginrequest $request){
       session()->put('user',$request->user);
       session()->put('pass',$request->pass);
       echo session('user');
       echo "<br>".session('pass');
   }
}
