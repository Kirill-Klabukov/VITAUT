<?php

$sn1 = $_GET["a"];
$sn2 = $_GET["b"];

$file1 = fopen("sensors.txt","w") or die("Unable to open file!");
$text1 = "TEXT1 a=" . $sn1 . " b=" . $sn2;

fwrite($file1, $text1);

echo fread($myfile,filesize("sensors.txt"));
fclose($file1);

$file2 = fopen("actuator.txt","w") or die("Unable to open file!");
$text2 = " TEXT2 Value from actuator.  Save this value to actuator.txt";
fwrite($file2, $text2);
echo fread($myfile,filesize("actuator.txt"));
fclose($file2);

$file3 = fopen("actuator.txt","r") or die ("Subor neexistuje");
$text3 = fread($file3,filesize("actuator.txt"));

echo $text3;


echo fread($myfile,filesize("actuator.txt"));
fclose($file3);
?>
