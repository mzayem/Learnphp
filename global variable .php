<?php

$a = 10;
function test() {
global $a;
echo "the variable value inside the function : ". $a . "<br>";
}

test();
echo "the variable value outside the function : " . $a;
?>
