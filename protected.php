<?php

class base{
    protected $name;

    public function __construct($n){
        $this->name = $n;
    }

    protected function show(){
        echo "Your Name : ".$this->name . "<br>";
    }
}

class derived extends base{
    public function get(){
    echo "Your Name : ".$this->name . "<br>";
}
}

$test = new derived("Bhumi majithiya");

//$test->name = "Majithiya Bhumi"; //Override name property

$test->get();
?>