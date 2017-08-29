<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use DB;

class Register_control extends Controller
{
    //
    public function Register_page()
    {
    	return view ("Pages.Register");
    }
    public function Register_Function(Request $request)
    {
        $user2=new user ;
        $user2->name=$request->Uname;
        $user2->password=$request->Upass;
        $user2->role=$request->role;
        $user_role=$user2->role;
        $user2->email=$request->Umail;

        $user2->save();
        echo $user_role;
    	return view("Pages.Home",compact('user_role'));
    	    	//return view("Pages.Register");

    	
    }
}
