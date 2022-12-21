<?php
echo '<h1>getParameters page</h1>';

$sn1 = $_GET["a"];
$sn2 = $_GET["b"];
$sn5 = $_GET["temperature"];
$sn6 = $_GET["humidity"];

// Open the text file for writing
$file = fopen("sensors.txt", "w");

// Write the variables to the file, separated by a comma
fwrite($file, "$sn1,$sn2,$sn5,$sn6");

// Close the file
fclose($file);



//$text = "a=" . $sn1 . " b=" . $sn2 . "temperature=" . $sn5 . "humidity=" . $sn6;
//$sum = $sn1 + $sn2;


$file3 = fopen("data.txt","r") or die ("Subor neexistuje");
$text3 = fread($file3,filesize("sensors.txt"));
echo $text3;
fclose($file3);

?>
