<?php
$a = 12;
$b = 3;

$c = $a + $b ;
echo $c, "  -  sum" . "<br>";
$a += $b;

$d = $a - $b ;
echo $d, "  -  sub" . "<br>";
$a -= $b;

$e = $a * $b ;
echo $e, "  -  multiply" . "<br>";
$a *= $b;

$f = $a / $b ;
echo $f, "  -  divide" . "<br>";
$a /= $b;

$i = $a % $b ;
echo $i, "  -  modulus" . "<br>";
$a %= $b;

$j = $a ** $b ;
echo $j, "  -  Expolade" . "<br>";
$a **= $b;

$a++;
echo $a, "  -  After the increment <br>";

$a--;
echo $a, "  -  After the decrement <br>";


 ?>
