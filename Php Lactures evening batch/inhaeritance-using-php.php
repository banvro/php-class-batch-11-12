<?php

// OOP's
    // class
    // object
    // methods
    // attributes
    // constructor
    
    // ---> Inheritance : 
    //         1) Single level Inheritance
    //         2) Multiple Inheritance
    //         3) Multilevel Inheritance
    //         4) Hararchical Inheritance
    //         5) Hybrid Inheritance
    


// Inheritance --> to access the properties, attributes methods from one class to another.



//     parent child relationship
    
// 1) parent  -------- 2) child


// class alphabet{
//     function employee(){
//         echo "these are alphabet employees \n";
//     }
    
//     function systemm(){
//         echo "this alphabet systemm. \n";
//     }
// }

// class google extends alphabet{
//     function google_emp(){
//         echo "these are google emoloyee. \n";
//     }
    
//     function building(){
//         echo "this is oogle building. \n";
//     }
// }

// $ob = new google;
// $ob->building();






// 1) Single level Inheritance
//     --> 1 child have only 1 parent
    

// 2) Multiple Inheritace:
//     1 child have multiple parents


// class cls1{
//     function mthd1(){
//         echo "this is method 1";
//     }
    
//     function mthd2(){
//         echo "this is method 2";
//     }
// }

// class cls2{
//     function mthd3(){
//         echo "this is method 3";
//     }
// }

// class cls3{
//     function mthd4(){
//         echo "this is method 4";
//     }
// }




// 3) Multilevel Inheritancee:
//         Chain
        
//         grandparent <--- parent <----- child

// class cls1{
//     function mthd1(){
//         echo "this is method 1";
//     }
//     function mthd2(){
//         echo "this is method 2";
//     }
// }

// class cls2 extends cls1{
//     function mthd3(){
//         echo "this is method 3";
//     }
// }

// class cls3 extends cls2{
//     function mthd4(){
//         echo "this is method 4";
//     }
// }

// $ob = new cls3;
// $ob->mthd2();




// 4) Hararchical Inheritance:
    
//     1 parent multiple child



// 5) Hybrid Inhertiance:
//     when we combine 2 ya more then 2 inhertiances. ---> hybrid inheriance

// Multilevel + 


// class cls1{
//     function mthd1(){
//         echo "this is method 1";
//     }
//     function mthd2(){
//         echo "this is method 2";
//     }
// }

// class cls2{
//     function mthd3(){
//         echo "this is method 3";
//     }
// }

// class cls3{
//     function mthd4(){
//         echo "this is method 4";
//     }
// }
// class cls4{
//     function mthd5(){
//         echo "this is method 5";
//     }
// }



// Multiple Inheritance:
//     1 child have multiple parents


// trait



// trait cls1{
//     function mthd1(){
//         echo "this is method 1";
//     }
//     function mthd2(){
//         echo "this is method 2";
//     }
// }

// trait cls2{
//     function mthd3(){
//         echo "this is method 3";
//     }
// }

// class cls3{
//     use cls1, cls2;
//     function mthd4(){
//         echo "this is method 4";
//     }
// }

// $oj = new cls3;
// $oj->mthd2();



// Hararchical + Multiple


class cls1{
    function mthd1(){
        echo "this is method 1";
    }
    function mthd2(){
        echo "this is method 2";
    }
}

trait cls2{
    function mthd3(){
        echo "this is method 3";
    }
}

trait cls3{
    function mthd4(){
        echo "this is method 4";
    }
}
class cls4 extends cls1{
    use cls2, cls3;
    function mthd5(){
        echo "this is method 5";
    }
}

$o = new cls4;
$o->mthd4();





// class ---> 10 years back --> name, phone, email, parent_mname.

// user ----> address









?>
