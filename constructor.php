<?php

class person{
    public $name ;
    public $age ;

    function __construct($name="no name" , $age="20") //no name and 20 is default value
    {
        $this->name =$name;
        $this->age =$age;
    }

    function show()
    {
        echo $this->name ." - ".$this->age . "\n"; 
    }
}

//create person class object
$p1 = new person("Bhumi" , 20);
$p2 = new person();

//call funtion using object
$p1->show();
echo"<br>";
$p2->show();
?>