<?php
/*
function sum($a, $b) { # we can use many number of parameter
  echo "the sum of variable is : ".$a + $b;
}

sum(2,4); #argument
*/
function life($name = "lover name") { # we can use many number of parameter
  echo "my love is ". $name . "❤️❤️❤️<br>";
}
life();
life("Ayesha");
//// Return function /////
function sum($a, $b) { # we can use many number of parameter
  $v = $a + $b;
  return $v;
}

$c = sum(2,4); #argument

echo "the sum is : ". $c. "<br>";

/////example////
function marks($math,$sc,$chem) { # we can use many number of parameter
  $r = $math + $sc + $chem;
  return $r;
}
function percentage($st){
  echo "percentage = ".$st/3 . "%";
}

$total = marks(86,76,95); #argument

echo "Total marks is : ". $total. "<br>";
percentage($total);

 ?>
