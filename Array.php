<?php
#method 1 to right array
$cars = array("civic","lamborgini", "pocha", "g wagon");

/*
echo $cars[0];
echo $cars[1];
echo $cars[2];
echo $cars[3];
*/
echo "<pre>";
print_r ($cars);
echo "</pre>";

#method 2 to write   array
$colour = ["red", "black", "orange", "yellow"];
 echo "<ul>";
for ($i = 0; $i < 4; $i++) {
  echo "<li> $colour[$i] </li>";
}
echo "</ul>";
#Assosative array

$mobile = array('iphone' => 2, "samsung" => 1 );

echo $mobile['iphone']. "<br>" ;
var_dump($mobile);

#count
echo count($cars);
#sizeof
echo sizeof($cars);

 ?>
