<?php

function first($num){    #passing agurment by value
$num += 7;
}

function second(&$num){  #passing agurment by refrence
  $num += 7;
}

$st = 10;
first($st);
echo "orignal value is : " . $st . "<br>";
second($st);
echo "orignal value is : " . $st . "<br>";
 ?>
