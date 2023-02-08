<?php

//Line
echo "Line Number : " . __LINE__ . "<BR>";

//File
echo "THE FULL PATH OF THIS FILE: " . __FILE__ . "<BR>";

//Dir
echo "THE FULL PATH OF THIS DIRECTORY IS: " . __DIR__ . "<BR>";


//Function...
function Myfunction(){
echo "THE FUNCTION NAME IS: " . __FUNCTION__ . "<BR>";
}
Myfunction();


//class name...
class Myclass{
    
    public function getClassName(){
        return __CLASS__;
    }
}
 $obj = new Myclass();
 echo $obj -> getClassName();


 //Methods........
 echo"<br>";

 class Myc{
    
    public function getClassname(){
        return __METHOD__;
    }
}

 $obj1 = new Myc();
 echo $obj1 -> getClassname();

 ////namespace
 
//  namespace MyNamespace;
//  class Myclass{
    
//     public function getNamespace(){
//         return __CLASS__;
//     }
// }

// $obj2 = new Myclass();
//  echo $obj2 -> getNamespace();

trait MyTrait{
    public function getTraitName(){
        return __TRAIT__;
    }
}
class Myclass{
   
   use MyTrait;
}

$obj2 = new Myclass();
echo $obj2 -> getTraitName();

?>

