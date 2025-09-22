<?php

// Arrays:

// Indexed Array:

// function:

// $zx = array(12, 45, 6, 7, 8, 45, 23);

// print_r($zx);

// 1) count()

// echo count($zx);

// Array -----> Mutable (Modify) data type






// $zx = array(12, 45, 6, 7, 8, 45, 23);


// adding a new element---

// at end of the array:

// array_push($zx, 100, 300);


// print_r($zx);




// $arr = [];

// for loop ----> 1 - --- 10;
//     $arr <--- i


// [1, 2, 3, 4, ,---- 10]




// array_pop()

// $zx = array(12, 45, 6, 7, 8, 45, 23);

// array_pop($zx);
// array_pop($zx);
// array_pop($zx);


// print_r($zx);



// add element at beging of the array

// $zx = array(12, 45, 6, 7, 8, 45, 23);

// array_unshift()
// array_unshift($zx, 1, 34);

// array_shift() ---> to delete elemtns from beginng

// array_shift($zx);

// print_r($zx);


// $zx = array(12, 45, 6, 7, 8, 45, 23);

// sort($zx); ---> to assending order

// rsort($zx); ----> to decending ordder

// $x = array_reverse($zx);

// print_r($x);



$zx = array(12, 45, 6, 7, 8, 45, 23);

// in_array()

// if (in_array(12, $zx)){
//     echo "element exist";
// }else{
//     echo "not element";
// }

// echo "\n";
// echo array_search(4545, $zx);


// $zx = array(12, 45, 6, 7, 8, 45, 23);

// $xy = array(1, 2, 3, 4, 5);

// $x = array_merge($zx, $xy);

// print_r($x);



// implode ---> array ---> convert ---> string

// echo implode("-", $zx);

// explode --> string ---> convert ---> array

// $x = "this is a car";

// $u = explode(" ", $x);

// print_r($u);



// indexing ---> single

// $zx = [12, 34, 45, 56, 67, 78, 89, 100];


// print_r(array_slice($zx, 2, 5));

// print_r(array_slice($zx, 1, 3));



// array_splice()

// $zx = [12, 78, 45, 12, 67, 78, 78, 100];

// print_r(array_unique($zx));

// echo "\n";

// echo array_sum($zx);

// echo "\n";

// echo array_product($zx);

// shuffle($zx);

// print_r($zx);



// $x = range(1, 21);

// print_r($x);


// syntax

// array_splice(array_name, start, len=0, replace=[])


$zx = array(12, 34, 45, 56, 67, 7, 78, 34);

array_splice($zx, 5, 0, [1, 2, 3]);

print_r($zx);



?>
