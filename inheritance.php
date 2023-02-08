<?php


class employee
{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info()
    {
        echo "<h3>Employee Profile</h3>";
        echo " Employee name : ". $this->name . "<br>"; 
        echo " Employee age : ". $this->age . "<br>";
        echo " Employee salary : ". $this->salary. "<br>";
    }

}

//manager is inherited from employee
class manager extends employee
{

     public $ta = 5000;
     public $phone = 300;
     public $total_salary;
     
     function info()
     {
         $total_salary = $this->salary + $this->ta + $this->phone;
        echo "<h3>Manager Profile</h3>";
        echo " Employee name : ". $this->name . "<br>"; 
        echo " Employee age : ". $this->age . "<br>";
        echo " Employee salary : ". $this->total_salary. "<br>";
     }
}

 $e1 = new manager("RAm", 25, 10000);
 $e2 = new employee("RAm", 25, 10000);

 $e1->info();
 $e2->info();

?>