<?php

// $xyz = [12, 34, 56, 67, 89, 90, 100];

// for ($i = 0; $i < count($xyz); $i++){
//     echo $xyz[$i] . "\n";
// }

// syntax
// foreach (array_name as veriable){
    
// }


// foreach ($xyz as $u){
//     echo $u;
// }


// echo $u;



// Function:

// Assocative Array:

// $stu = array("name" => "Moris", "Age" => 20, "Phone_number" => 28936424343);


// print_r($stu);

// echo $stu["Age"];

// print_r(array_values($stu))


// $stu = array("name" => "Moris", "Age" => 20, "Phone_number" => 28936424343);

// foreach ($stu as $x){
//     echo $x."\n";
    
// }

// $stu = array("name" => "Moris", "Age" => 20, "Phone_number" => 28936424343);

// $stu["Address"] = "this is address";


// print_r($stu);


// $stu = array("name" => "Moris", "Age" => 20, "Phone_number" => 28936424343);

// $stu+=["Address" => "addreessss", "Pincode" => 98236434];


// print_r($stu);



// $stu = array("name" => "Moris", "Age" => 20, "Phone_number" => 28936424343);

// $stu_detail = array("addres" => "this addres", "Location" => "India");

// $x = array_merge($stu, $stu_detail);


// print_r($x);




// 3) MultiDimensoional array:

// $x = array(
//         array(12, 34, 45, 56),
//         array(45, 56, 67, 89),
//         array(1, 2, 3, 4)
//     );

// print_r($x);


// echo $x[1][2];




// $stu = array("name" => "Moris", "Age" => 20, "Phone_number" => 28936424343);

// $stu["nickName"] = $stu["name"];

// unset($stu["name"]);

// // $stu["name"] = "Kriss";


// print_r($stu);




// $students = array(
//         101 => array("name" => "Moris", "Coure" => "Python", "phone"=> 823649248),
//         102 => array("name" => "Kirss", "Coure" => "PHP", "phone"=> 892386493),
//         103 => array("name" => "Hello", "Coure" => "Java", "phone"=> 982364934),
//         104 => array("name" => "ganesh", "Coure" => "Modulo", "phone"=> [
//                 "parents_number" => 9238496324,
//                 "phone" => 982364634343
//             ]),
    
//     );

// // print_r($students);

// echo $students[104]["phone"]["phone"];


// ---------------------------------------


// functions

// function


// function greet(){
//     echo "good morig.\n";
// }

// greet();


// greet();


// function xyzsumm(){
//     $a = 10;
//     $b = 60;
//     $c = $a + $b;
    
//     echo $c;
// }


// xyzsumm();



// Perameters and arguments

// function xyzsum($x, $y){
//     $z = $x + $y;
    
//     echo "the sum of $x and $y is : $z.\n";
// }



// xyzsum(10, 34);


// xyzsum(7, 5);

// xyzsum(10);



// --------------------------------

// default perameters:

// function ysum($x = 0, $u = 0){
//     $xy = $x + $u;
//     echo $xy ."\n";
// }


// ysum(3, 6)


// Veriable length peramers

// function zsum(...$x){
//     echo array_sum($x);
// }


// zsum(12, 34, 45, 56, 67, 78, 8, 34, 3, 56, 1)




// Keyword arguments / Named argumens

function info($name, $age){
    echo "user name is $name and age is $age";
}

info(age : 20, name : "Kriss");












?>
