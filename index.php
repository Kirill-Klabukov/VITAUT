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

?>
