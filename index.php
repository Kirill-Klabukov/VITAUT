<?php 

$a = 0;

echo '<html> 
<head>
  <title> Rele </title>
  
  
  <script>
  
  
function on() {
  // Get the values of the a and b variables
  var a = document.getElementById("a").value;
  
  // Plus 1 to a
  var result = a + 1; // ON

  // Display the result on the page
  document.getElementById("a").innerHTML = result;
}



function off() {
  // Get the values of the a and b variables
  var a = document.getElementById("a").value;
  
  // Subtract 1 from a
  var result = a - 1; // OFF

  // Display the result on the page
  document.getElementById("a").innerHTML = result;
}
  
  
  
  </script>
</head>

<body>





<a id="a"> '. $a . '</a>




<input type="button" value="ON" onclick="javascript:on();">
<input type="button" value="OFF" onclick="javascript:off();">

</body>

</html> ';

?>
