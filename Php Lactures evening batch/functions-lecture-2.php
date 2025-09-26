<?php

// Basic function
    // ---> return ststament


// Lambda functon
//     ----> no name 
//         ---> function ----> store in veribale.


// $veribal_name = function(peramters){
    
//     codee....
//     return ....
// }


// $adding_two_num = function($x, $y){
//     $zx = $x + $y;
//     return $zx;
// };



// echo $adding_two_num(10, 23) + 34;





// Closures ---> use

// assume --> veriable

// $x = 10;

// $xyz = function($y) use ($x) {
//     return $x + $y;
// };

// echo $xyz(12);


// ----------------------

// Arrow function:

// $greet = fn($name) => "Hellow $name";


// echo $greet("kriss");



// $xyz = fn($x, $y) => $x+$y;

// echo $xyz(12, 3);



// Callback function:-

// $greet = function($name){
//     return "hello $name";
// };


// function callme($x){
//     echo $x("David");
// }

// callme($greet);



$summm = function($x, $y){
    $zx = $x + $y;
    return $zx;
};

function callMeback($u){
    echo $u(12, 10);
}

callMeback($summm);







?>
