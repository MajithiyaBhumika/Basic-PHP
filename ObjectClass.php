<?php


class calculation                           //creating calculation class
{
    public $a, $b, $c;                      // properties

    function sum(){

        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){

        $this->c = $this->a - $this->b;
        return $this->c;
    }
}


    $c1 = new calculation();                    // create object of calculation class

    $c1->a =20;                  
    $c1->b =10;

    echo "sum value of c1 :" . $c1->sum()."\n";  // call sum function


?>