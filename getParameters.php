<?php
echo '<h1>getParameters page1</h1>';

$sn1 = $_GET["a"];
$sn2 = $_GET["b"];
$sn5 = $_GET["temperature"];
$sn6 = $_GET["humidity"];
$sn7 = $_GET["rvc"];

// Open the text file for writing
$file = fopen("sensors.txt", "w");

// Write the variables to the file, separated by a comma
fwrite($file, "temperature = $sn5, humidity = $sn6, rvc = $sn7");

// Close the file
fclose($file);



//$text = "a=" . $sn1 . " b=" . $sn2 . "temperature=" . $sn5 . "humidity=" . $sn6;
//$sum = $sn1 + $sn2;


$file3 = fopen("sensors.txt","r") or die ("Subor neexistuje");
$text3 = fread($file3,filesize("sensors.txt"));
echo $text3;
fclose($file3);

?>
