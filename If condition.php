<?php

$percentage = 83;

if ($percentage >= 80 && $percentage <= 100) {
echo "Merit";
}
elseif ($percentage >= 60 && $percentage <= 79) {
echo "1st division";
}
elseif ($percentage >= 45 && $percentage <= 59) {
echo "2nd division";
}
elseif ($percentage >= 33 && $percentage <= 44) {
echo "3rd division";
}
elseif ($percentage >= 33) {
echo "Fail ";
}
else {
  echo "value is not percentage";
}

 ?>
