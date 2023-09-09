<?php

for($a=1; $a<=10; $a++) {

  if ($a==3){
    echo "no.".$a. "<br>";
    continue;
  }
  if ($a==7) {
    echo "loop end due to break statment on 7 ";
    break;
  }
echo "number : ".$a."<br>";

}

?>
