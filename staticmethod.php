<?php
class base{
    public static $name = "Hello Hii";

    public static function show(){
        echo self::$name;
    }

    public function __construct($n){
        self::$name = $n;
    }
}
echo base::$name;
echo base::show();

// class derived extends base{
//     public static function show(){
//         echo parent::$name;
//     }
// }

// $test = new derived();
// $test->show();
$test1 = new base("wow");
$test1->show();

?>