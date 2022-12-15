<?php 

$a = 0;

echo '<a id="a">'$a'</a>';


echo '<h1>Nadpis uroven 1</h1>';

echo '<h2>Nadpis uroven 2</h2>';

echo '<p>First web on Azure</p>'; 

echo '<input type="button" value="ON" onclick="javascript:on();">';
echo '<input type="button" value="OFF" onclick="javascript:off();">';


function on() {
  // Get the values of the a and b variables
  var a = document.getElementById("a").value;
  
  // Subtract 1 from a
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

?>
