<?php

class base
{
    private $name;

    public function __construct($n){
        $this->name = $n;
    }

    private function show(){ 
        echo "Your Name : ".$this->name . "<br>";
    }
}

class derived extends base
{
    public function get(){
    echo "Your Name : ".$this->name . "<br>";
}
}

$test = new base("Bhumi majithiya");

//$test->name = "Majithiya Bhumi"; // name property is private 

$test->show(); //private method show() can't access
?>