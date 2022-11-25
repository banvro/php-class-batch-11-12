<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class dbtest extends Controller
{
    function select(){     
       $hlovar =  DB::table('user')->get();
    //    $hlovar =  DB::table('user')->where('name','hey')->get();
    //    $hlovar =  DB::table('user')->count('id');
    //    $hlovar =  DB::table('user')->max('id');
    //    $hlovar =  DB::table('user')->min('id');
    //    $hlovar =  DB::table('user')->avg('id');
    //    $hlovar =  DB::table('user')->sum('id');
    //    $hlovar =  DB::table('user')->orderBy('id', 'desc')->get();

    // $hlovar =  DB::select(DB::raw('select * from user'));

    // $hlovar =  DB::table('user')->select('name', 'email')->get();
        echo "<pre>";
       print_r($hlovar);

    }

    function insert(){
        $hlovar =  DB::table('user')->insert([
            "name"=> "thisisnew name",
            "email" => "helloname@gmail.com"
        ]);
    }

    function update(){
        $hlovar =  DB::table('user')->where("id","6")->update([
            "name"=> "uuuuuuuuuuuu",
            "email" => "uuuuuuuuuuuu@gmail.com"
        ]);
    }

    function delete(){
        $hlovar =  DB::table('user')->where("id","3 ")->delete();
       
    }
}
