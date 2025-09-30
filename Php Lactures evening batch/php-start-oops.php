<?php

// OOP's
    // Conceptss
    //     ---> Programming Concepts
    //         --> help to write and manage code.. effeciently.
        
    //     10 -- 15



// Code ---> 
//     Classes orobjects


// class -> is a blueprint of an object.


// object -> is an instance of a class.



// class

// class class_name{
//     code..........
// }

// methods --> function

// class myfirstcls{
    
//     function method1(){
//         echo "this is method 1 ";
//     }
    
//     function method2(){
//         echo "this is method 2";
//     }
    
//     function method3(){
//         echo "this sis method 3";
//     }
    
// }

// $obj = new myfirstcls;

// $obj->method3();




// Constructor :
//         is a spacial method in our class. to build constructor we use keyword name
//          _construct. 
//          The main fnctionality of constructer is it calles automatically when we create an object of a class.


// class xyz{
    
//     function __construct(){
//         echo "this is constructor";
//     }
    
//     function methd1(){
//         echo "this is method 1";
//     }
    
//     function mthd2(){
//         echo "this is method 2";
//     }
// }

// $xy = new xyz;
// $xy->methd1();
// $xy->mthd2();




// __construct
//     ---> to initilize the attributes and properties in class.

// Attributes -> spacial veriables, which are accessable in the overall class.


class calculator{
    public $x;
    public $y;
    
    function __construct(){
        $this -> x = 20;
        $this -> y = 45;
    }
    
    function addtion(){
        $summ = $this->x + $this->y;
        echo "the sum is : $summ \n";
    }
    function subtraction(){
        $sub = $this->x - $this->y;
        echo "the subraction is : $sub \n";
    }
    function multi(){
        $multi = $this->x * $this->y;
        echo "the subraction is : $multi \n";
    }
}

$oobb = new calculator;
$oobb->addtion();
$oobb->subtraction();
$oobb->multi();













?>
