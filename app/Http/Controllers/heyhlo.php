<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class heyhlo extends Controller
{
    function selectdata(){
        // $hlo = DB::table('user')->get();
        // $hlo = DB::table('user')->where('id','>',1)->get();
        // $hlo = DB::table('user')->where('id','>',1)->get();

        echo "<pre>";
        print_r($hlo);
    }
}



// Models :: EloQUENT ORM

