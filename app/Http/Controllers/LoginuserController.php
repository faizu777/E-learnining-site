<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginuser;
use Validator;
class LoginuserController extends Controller
{

    function loginpage()
    {
return view('login');
    }
    function RegisterPage()
     {
        return view('Register');
    }
    public function login(Request $Logindetails)
    {
        $Logindetails= request()->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $User=loginuser::where('email',$Logindetails['email'])->first();
        if($User==NULL)
        {
            return back()->with('error','Invalid Email or Password');

        }
        else
        {
            if($User->password==$Logindetails['password'])
            {

session()->put('user', $User);

                return redirect('/admin');
            }
            else
            {
                return back()->with('error','Invalid Email or Password');
               }  
             }
    }
    function Register( )
    { $Registerdetails= request()->validate([
'name'=>'required',
'email'=>'required| email' ,
'password'=>'required',


    ]);

        $User=new loginuser;
        $User->username=$Registerdetails['name'];
        $User->password=$Registerdetails['password'];
        $User->email=$Registerdetails['email'];
        $User->save();
        return back()->with('success','Registration Successful');
        

    }

    function logout()
    {
        session()->forget('user');
        return redirect('/');
    }
}
