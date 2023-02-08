
<!-- length of an Array - The count() -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo"<br>";

$age = array("one","two","three");
echo $age[0];
echo"<br><br>";


// for loop in array for print array elements

$car = array("Volvo", "BMW", "Toyota");
$arrlength = count($car);
echo $arrlength;
echo"<br>";
for($x = 0; $x < $arrlength; $x++) {
  echo $car[$x];
  echo "<br>";
}
 echo "<br><br>";



//  foreach loop use in associative array

$age = array("san"=>"35", "man"=>"37", "ram"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>


<!-- Two dimensional Arrays 
for loop inside another for loop to get the elements-->
<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  
);
    
for ($row = 0; $row < 3; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 2; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>


<!-- sorting Arrays -->

<?php
$age = array("Bhumi"=>"21", "san"=>"22", "man"=>"25");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

?>




