<?php

$class_data = [
  [1,"M.Zayem", "computer science", "5th"],
  [1,"Ilyas", "computer science", "5th"],
  [1,"Ahtsham", "computer science", "5th"],
  [1,"Waqas", "computer science", "5th"],
  [1,"Shan", "computer science", "5th"]
];

echo $class_data[0][1]. "<br>";

for ($row=0; $row <4 ; $row++) {
  for ($col=0; $col <4 ; $col++) {

    echo $class_data[$row][$col]. "   ";
  }
  echo "<br>";
}

echo "<table border = '2px' ";
foreach ($class_data as $val1) {
  echo "<tr>";
  foreach ($val1 as $val2) {
echo "<td>". $val2 . "</td>";
}
echo "</tr>";
}
echo "</table";


 ?>
