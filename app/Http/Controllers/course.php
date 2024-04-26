<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class course extends Controller
{
    function index()  
    {
       
        return view('index');

    }
    function about()
    {
        return view('about'); 
    }
    function contact() 
    {
        return view('contact');
        
    }
    function privacy() 
     {
        return view('privacyandpolicy');
    }
}
