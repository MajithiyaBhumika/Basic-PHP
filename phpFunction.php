<!-- php User define function -->

<?php  
function sayHello(){  
echo "Hello PHP Function";  
}  
sayHello(); //calling function  
?>  

<!-- php Function Arguments: -->

<?php  
function sayHello1($name){  
echo "Hello $name<br/>";  
}  
sayHello1("Bhumi");  
sayHello1("jiya");  
sayHello1("Janvi");  
echo"<br>";
?>  


<!-- php call By reference -->
<?php  
function adder(&$str2)  
{  
    $str2 .= 'Call By Reference';  
}  
$str = 'Hello ';  
adder($str);  
echo $str;  
echo"<br>";
?>  

<!-- Default arguments -->

<?php  
function sayHello2($name="Bhumi"){  
echo "Hello $name<br/>";  
}  
sayHello2("Rajesh");  
sayHello2();// passing no value  
sayHello2("John");  
?>  


