<?php

interface parent1
{

    function calc($a,$b);   //not access modifiers before function keyword
                             
}

interface parent2
{
    function sub($c,$d);
}


//child class imlpements both parent class
class childclass implements parent1, parent2
{
    public function calc($a,$b)  
    {
        echo $a + $b;
    } 
    
    public function sub($a,$b)
    {
        echo $a - $b;
    }

}


$test = new childclass();

$test->calc(20,35);
echo"<br>";
$test->sub(21,10);

?>