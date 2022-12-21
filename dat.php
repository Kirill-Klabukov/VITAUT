<?php

// Get the variables from the URL
$var1 = $_GET['var1'];
$var2 = $_GET['var2'];

// Open the text file for writing
$file = fopen("data.txt", "w");

// Write the variables to the file, separated by a comma
fwrite($file, "$var1,$var2");

// Close the file
fclose($file);



$file3 = fopen("data.txt","r") or die ("Subor neexistuje");
$text3 = fread($file3,filesize("actuator.txt"));
echo $text3;
fclose($file3);

?>
