<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    function hey($id){
        return view('home', array('heyid'=> $id));
        
    }


    function set_session(Request $hello){
        $hello->session()->put("name", "thisisname");
    }

    function get_session(Request $hello){
        echo $hello->session()->get("name");
    }

    function remove_session(Request $hello){
        $hello->session()->forget("token");
    }

    function check_session(Request $hello){
        if($hello->session()->has("name")){
            echo "auhanticated...!";
        }else{
            echo "denide!";
        }
    }

    function loginformsubmitt(Request $hello){
        $hello->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $email = $hello->input("email");
        $password = $hello->input("password");

        echo $email, $password;

        if($email=="abc@gmail.com" && $password=="123"){
            $hello->session()->put("token", "sdjbfsdfbs");

        }else{
            $hello->session()->flash("error","Please Enter valid Email or Password");
            return redirect('login');
        }
        
    }
}
