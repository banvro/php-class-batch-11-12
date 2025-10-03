<?php

// Abstraction : 
    
//     for build blueprints 
//     for hidding unsacessry details 

// interface | abstract 



// abstract class veachial{
//     abstract public function tyers();
//     abstract public function body();
//     abstract public function engine();
// }

// class oddi extends veachial{
//     function tyers(){
//         echo "these are typers";
//     }
    
//     function body(){
//         echo "this is the body";
//     }
    
//     function engine(){
//         echo "this is the engine";
//     }
// }

// class mercedies extends veachial{
    
// }





// interface vehical{
//     function tyers();
//     function engine();
// }

// interface plan{
//     function wings();
// }


// class indego implements vehical, plan{
    
// }





// Encapsulation


// class {
//     method1
    
//     methd2
// }



// Access Spacifires:
//     1) Public Mambers
//     2) Proteced mambers
//     3) private mambers 




class Bankaccount{
    private $accountnumber;
    public $balanace;
    
    function __construct($x, $y){
        $this->accountnumber = $x;
        $this->balanace = $y;
    }
    
    function access(){
        echo $this->accountnumber;
    }
    
    protected function xyz(){
        echo "this is my xyzz method";
    }
}


$obj = new Bankaccount(9832468324923, 1200023);
echo $obj->balanace . "\n";

$obj->access();

// $obj->xyz();

class childdd extends Bankaccount{
    function abcc(){
        $this->xyz();
    }
}

$x = new childdd(1, 2);
$x->abcc();









?>
