<?php

 $emp = [
    [1,"Krishana","Manager",50000],
    [1,"Divyea","Salseman",30000],
    [1,"Aviral","Computer Operator",20000],
    [1,"Sagar","Driver",10000]
 ];

 for($row = 0;$row < 4; $row++)
 {
    for($col = 0;$col < 4; $col++){
        echo $emp[$row][$col] . " ";
    }
 }

 echo "<pre>";
print_r($emp);
echo "</pre>"; 

?>