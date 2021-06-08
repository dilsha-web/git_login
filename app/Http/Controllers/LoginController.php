<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function validation(Request $req){
        $this->validate($req,[
            'uname' => 'required',
            'pass' => 'required',
        ]);

         $a = new  Login();
       $a->uname = $req->uname;
       $a->pass = Hash::make($req->pass);
       $a->save();



    }

    
        

}
