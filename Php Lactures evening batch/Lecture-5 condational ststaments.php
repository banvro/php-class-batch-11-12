<?php

// Condational Statments:
//     if, else if, else

// ----> program ---> condation


// ----> voating system <---------

// Syntax:

// if (condation){
    
// }


// $x = 50;

// if ($x < 34){
//     echo "x is small";
// }else{
//     echo "x is not small";
// }


// echo "------------ My Voatting System ----------\n";

// echo "\n";

// $age = 45;

// if ($age > 18){
//     echo "You are eligible for voat";
// }else{
//     echo "you are not eligible for voat";
// }


// to get input from user...

// readline()



// $name = readline("Enter your name : ");

// echo "Your name is $name";



// proram  --> adding two numbers;

// $x = readline("Enter first number : ");
// $y = readline("ENter seocnd number : ");

// $addd = $x + $y;

// echo "the output is : $addd";




// $age = readline("Enter your age : ");

// if ($age > 18){
//     echo "You are eligibe for vaot";
// }else{
//     echo "you are not eligibel for voat";
// }


$age = readline("Enter your age : ");

if (is_numeric($age)){

    if ($age > 18){
        echo "You are eligible for voat";
    } 
    
    else if($age == 18){
        echo "this is you first voat!";
    }
    
    else if ($age == 19){
        echo "This is yur second voat";
    }
    
    else{
        echo "you are not eliigibe for vaot";
        }
    
}else{
    echo "Enter vaild data";
}












?>
