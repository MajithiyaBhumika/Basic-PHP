<?php

//get value using GET method
echo "<pre>";
print_r($_GET);  
echo "<pre>";


//get value using POST method
echo "<pre>";
print_r($_POST); 
echo "<pre>";


//get value using REQUEST method
echo $_REQUEST['fname']; 
echo $_REQUEST['age'];

?>
