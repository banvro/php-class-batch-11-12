<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    function thisismyform(Request $hey){
        // return $hey->post();
        // return $hey->get('age');
        // return $hey->query();
        // return $hey->url();
        // return $hey->method();

        $hey->validate([
            'thisisname' => 'required|min:3|max:10',
            'age' => 'required',
            'email' => 'required',
            'img' => 'required|mimes:png|max:1024'

        ]);

        echo $hey->file('img')->store('imgsection');

        // echo "hello";

    }
}
