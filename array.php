<?php
$age = [
    "bill" => "25",
    "steve" => 28.55,
    11 => 22
];


echo "<pre>";
print_r($age); 
echo "</pre>";


echo "<pre>";
var_dump($age); //var_dumb it is used for disalpay the data type of the array elements
echo "</pre>";

echo $age["bill"] . "<br>";
echo $age["steve"] . "<br>";
echo $age[11] . "<br>";
?>
