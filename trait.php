<?php

// creating hello trait
trait hello
{
public function sayhello(){
    echo "Hello everyone<br>";
   }
}


// create second trait bye
trait bye
{
    public function sayBye(){
        echo "Bye Bye everyone\n";
       }
 }


// base class use both trait
 class base
 {
    use hello,bye;

    public function sayBye()
    {  
    //overriding sayBye method
    echo "Bye everyone\n";
    }
 }


 //base2 class use hello trait
 class base2
 {
    use hello;
 }


 //base3 class use bye trait
 class base3
 {
    use bye;
 };
 

 $test = new base();
 $test2 = new base2();
 $test3 = new base3();

 $test->sayhello();
 $test->sayBye();
 $test2->sayhello();
 $test3->sayBye();
?>