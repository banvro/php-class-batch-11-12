<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Info extends Controller
{
    function info($id){
        // echo "hello";
        return view('home', array('heyid'=>$id));
    }
}



// Components....
