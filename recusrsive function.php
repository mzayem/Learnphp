<?php

function factorial($n) {

  if ($n== 0){
    return 1;
  }
  else {
    return ($a= $n* factorial($n-1));
  }
}
echo factorial(7);
 ?>
