<?php

// PHP
//         ---> Veriables
//         ---> Comments
//         ---> History
//         ---> echo, print, print_r()


// Data Types:
    
//     what type of data we deal in entire php.
    
// 8 ---->

// Loosely Typed langauge:

// int a;

// a = 1034;
    
    
// ---> String


// $x = "Hellooo";

// $y = 'Heyyy';
    

/*

$x = "10";
$y = "100";

echo $x + $y;


2) Integer:
        1, 3, -100, -1293, 2434, 123123....
        
3) Float / Double:
    
1.0, 23.45, 10.2
    
4) Boolean:
    True, False | 0, 1 | Yes, No
    
5) Array:

$x = 10;  

$xy = array(12, 34, 45, 56, 67, 7, 89, 100)

6) Object :----> OOPs
    

7) Null

8) Resource

*/

// PHP
// --> to check data type of any veriable:
    
//     var_dump()
    

// $x = array(12, 34, 45, 5, 6);

// echo var_dump($x);



// -----------------------------------------

// Type Casting / Type conversion:
    
    
//     data ----> to any on type
    
//     ----> and want to chnage its data type to another



// Type Juggling

// $x = "1000";

// $y = 200;

// echo $x + $y;


    
// Integer ---> int
// floot
// bool

    
// Syntax for type casting:

// $new_ver = (type) $old_data;


// $x = 10.6;

// echo var_dump($x) . "\n";

// $y = (int)$x;

// echo $y;






// $age = 20;

// $new_age = (string)$age;

// echo var_dump($new_age);

// echo $age . " ". "Years";












// String:
//     ----> pree built functions


// 1) to check the length / total number of charcters in string

// strlen()

// $x = "Hellow wolrd!";

// echo strlen($x);



// count words:

// str_word_count()

// $xy = "This is a car";

// echo str_word_count($xy);


// ----> string <----- reverse

// strrev()

// $x = "this is a Hello world program";

// echo strrev($x);



// $x = "Hello";

// $y = "HELLO";

// echo strcmp($x, $y);

// echo "\n";

// echo strcasecmp($x, $y);



// --------------------------------
// String --> sub string location

// $x = "thias is a car";

// echo strpos($x, "a");


// $xy = "PHP is a good programming lanague. You learn PHP and Smalrlty run PHP";

// echo strpos($xy, "PHP");

// echo "\n";

// echo strrpos($xy, "PHP");



// $xy = "PHP is a good programming lanague. You learn PHP and Smalrlty run PHP";

// substr()

// $yz = substr($xy, 35, 13);

// echo $yz;  
    




// $xy = "PHP is a good programming lanague. You learn PHP and Smalrlty run PHP";

// // str_replace()

// // syntax:

// // str_replace("serch", "write", "data")

// echo str_replace("PHP", "Python", $xy);
    
    
    

// data --> strinf (repete)


// $x = "Hello";

// echo $x * 2;
    
    
// str_repeat()

// $x = "PHP ";

// echo str_repeat($x, 5000);
  
  
// $x = "hey! how are you..!";

// // do in upper case

// // strtoupper()

// echo strtoupper($x);

// echo "\n";

// $y = "HELLO! PYTHON";
  
// echo strtolower($y);
// echo "\n";

// // lcfirst() ----->

// echo ucfirst($x);


$x = "Hello World";

echo lcfirst($x);
  
  
  
  
  
  
  
  
  
  
    
    


?>
