<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Models\proflile;

class userprofile extends Controller
{
    function hlouser(){
        // return proflile::all();
        return proflile::where("id",1)->get();
    }
    
    function insertusingmodel(){
        $responce = new proflile;

        $responce->name="abc";
        $responce->email="abc@gmail.com";
        $responce->password="oooo";
        $responce->save();
    }

    function updateusingmodel(){
        $responce = proflile::find(2);

        $responce->name="helloxx";
        $responce->email="helloxx@gmail.com";
        $responce->password="oooo";
        $responce->save();
    }

    function deletusingmodel(){
        $responce = proflile::where("id",1);
        $responce->delete();
    }
}
