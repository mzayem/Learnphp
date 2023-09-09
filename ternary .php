<?php

echo "<h1> Ternary Operator </h1>";

$a = 15;

($a> 10)? $z = "Greater" : $z = "Smaller";
$y = "value is ". ($a> 20 ? "Greater" : "Smaller");

echo $z."<br>", $y;

?>
