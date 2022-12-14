<?php
echo '<h1>getParameters page</h1>';

$sn1 = $_GET["a"];
$sn2 = $_GET["b"];
$sn5 = $_GET["temperature"];
$sn6 = $_GET["humidity"];


$text = "a=" . $sn1 . " b=" . $sn2 . "temperature=" . $sn5 . "humidity=" . $sn6;
$sum = $sn1 + $sn2;

echo $text;
echo "<br>";
echo "Sum:" . $sum;

?>
