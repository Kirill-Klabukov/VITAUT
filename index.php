<?php 

$a = 0;

echo '<html> 
<head>
  <title> Rele ESP </title>
  
  
  <script>
  
var a = 0;
  
  
function on() {
  a +=1;
  document.getElementById("a").innerHTML = a;
}



function off() {
  a -=1;
  document.getElementById("a").innerHTML = a;
}
  
  
  
  </script>
</head>

<body>





<a id="a"></a>




<input type="button" value="ON" onclick="javascript:on();">
<input type="button" value="OFF" onclick="javascript:off();">

</body>

</html> ';


$var1 = $a;


// Open the text file for writing
$file = fopen("data.txt", "w");

// Write the variables to the file, separated by a comma
fwrite($file, "$var1");

// Close the file
fclose($file);


?>
