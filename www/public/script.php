<?php

$firstArray= [1, 2, 3, 4, 5,];
var_dump($firstArray);
echo "<br>";
echo $firstArray[4];

echo "<br>";

$person=['Name'=> 'Dani', 'age'=> 35, 'email'=> 'dhuber88@sunrise.ch', 'hight'=> '172'];
print_r($person);
echo "<br>";

echo gettype($person['age']);
echo "<br>";

foreach($person as $daten => $wert){
echo strtoupper("$daten"). ": ". strtolower("$wert"). "<br>";
}
echo "<br>";

foreach($firstArray as $zahle=> $wert){
    echo $zahle+ $wert;
}
echo "<br>";

$actors= ["Brad Pitt", "Leonardo DiCaprio", "Jennifer Lawrence", "Meryl Streep", "Tom Hanks"];

array_push($actors, "Margot Robbie");
$actors[]= "Jason Statham";
array_unshift($actors, "Dwayne Johnson");
$actors= array_merge(["Jackie Chan"], $actors);


var_dump($actors);

?>