<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\proflile;

class userprofile extends Controller
{
    function hlouser(){
        return proflile::all();
    }
}
