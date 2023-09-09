<?php

echo "<h1>Day checker</h1>";

$weakday = 2;

switch ($weakday) {
  case 1:
    echo "Monaday";
    break;
  case 2:
    echo "Tuesday";
    break;
  case 3:
    echo "Wednesday";
    break;
  case 4:
    echo "Thursday";
    break;
  case 5:
    echo "Friday";
    break;
  case 6:
    echo "Saturday";
    break;
  case 7:
    echo "Sunday";
    break;
  default:
    echo "Please enter a valid waekday day";
    break;
}
//age Spoofchecker
echo "<h1>Age checker</h1>";
$age = 18;

switch ($age) {
  case ($age >= 18 && $age <= 20):
    echo "youa are eligible";
    break;
  case ($age >= 20 && $age <= 30) :
  echo "you are not eligible";
  default:
    echo "please enter a valid age";
    break;
}
?>
