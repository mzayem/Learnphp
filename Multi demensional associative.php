<?php

$marks = [
        "Zayem" => [
             "physics"=> 80 ,
             "chemistry" => 69 ,
             "English" => 85
        ] ,
        "Ali" => [
              "physics"=> 80 ,
              "chemistry" => 69 ,
              "English" => 85
        ] ,

       "yash" => [
              "physics"=> 80 ,
              "chemistry" => 69 ,
             "English" => 85
         ] 
];
echo "<table border = '2px', cellpadding = '5px', cellspacing = '0px'

<tr>
    <th>Student Name </th>
    <th>Physics </th>
    <th>Chemistry </th>
    <th>English </th>

</tr>

>";
foreach($marks as $key => $v1) {
echo "<tr>
        <td>". $key . "</td>" ;
           foreach ($v1 as $v2) {
             echo "<td>".$v2. "</td>";
   }
   echo"</tr>";
 }
echo "</table>";

echo "<pre>";
print_r($marks);
echo "</pre>";



?>
