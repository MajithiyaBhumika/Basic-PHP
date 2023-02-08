<?php 
$x = 75;
$y = 25; 

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;

echo"<br>";

// $_SERVER

echo $_SERVER['PHP_SELF'];  //return the filename of the currently executing script 

echo "<br>";
echo $_SERVER['SERVER_NAME'];//return the IP address of the host server
echo "<br>";
echo $_SERVER['HTTP_HOST'];//return the host header from the current request
echo "<br>";
echo $_SERVER['HTTP_REFERER'];//return complete URL of the current page
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];//
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];//return the path of the current script
?>