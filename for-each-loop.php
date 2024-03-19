<?php
// $colors = [
//     "red",
//     "green",
//     "blue"
// ];


// foreach($colors as $value){
//     echo $value . "<br>";
// }

$age = [
    "bill" => 25, //bill is key and 25 is value
    "steve" =>28,
    "elon" =>22,
];
echo "<ul>";
foreach($age as $key =>  $value){
    echo "<li>" . $key . "=" . $value . "</li>". "<br>";
}

echo "</ul>";

?>