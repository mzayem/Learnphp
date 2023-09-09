<?php

$marks = [
           [
            "Name" => "Zayem" ,
             "physics"=> 80 ,
             "chemistry" => 69 ,
             "English" => 85
        ] ,
              [
              "Name" =>  "Ali" ,
              "physics"=> 80 ,
              "chemistry" => 69 ,
              "English" => 85
        ] ,

                [
              "Name" => "yash" ,
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
foreach($marks as list("Name" => $nam, "physics" => $phy, "chemistry" => $chem , "English"=> $eng)) {
echo "<tr> <td>$nam</td> <td>$phy</td>  <td>$chem</td>  <td>$eng</td> </tr>";
 }
echo "</table>";

?>
