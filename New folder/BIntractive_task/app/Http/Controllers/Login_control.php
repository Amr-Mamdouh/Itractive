<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\user;
class Login_control extends Controller
{
    //
    public function Log_page()
    {
    	return view("Pages.Login");
    }

    public function Log_fun(Request $request)
    {

    	$user_name=$request->Uname;
    	$user_pass=$request->Upass;
        $user=new user;
    	$user1=user::select('role')->where('email','=',$user_name)->Where('password','=',$user_pass)->get();
        if(count($user1)==0)
        { echo("You are not register int our system please register to our system ") ;
            return view ("Pages.Register");}

            session_start();
         $user_role=$user1[0]->role;
            $_SESSION["role"]=$user_role;
       
        
       

        if ($user_role=="administrator"||$user_role=="editor"||$user_role=="client") {
             
         return view("Pages.Home",compact('user_role'));   
        }
        else{return view ("Pages.register");}

    }

    public function Logout_fun()
    {
        return view("Pages.Login");
    }
}
