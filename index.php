<!DOCTYPE html>
<html>
<body>


<?php 
  
    echo "Kirill Klabukov  ";  
    echo "<br>";
    echo "<br>";
  
    $field = [4, 10, 8, 15, 1, 0, 6, 8, 19, 20, 3];
    
    // 1) Display the entire field
    
    echo "Entire field: ";
    echo "<br>";
    echo "<br>";
    print_r($field);
    echo "<br>";
    echo "<br>";
    
    // 2) Display the largest value
 
    echo "Largest value: ";
    echo max($field);
    echo "<br>";
    echo "<br>";
    
    // 3) Display the smallest value
    
    echo "Smallest value: ";
    echo min($field);
    echo "<br>";
    echo "<br>";
    
    // 4) Display the sorted field from smallest to largest
    
    echo "Sorted field (<): ";
    sort($field); 
    print_r($field);
    echo "<br>";
    echo "<br>";
    
    
    
    //SOME ELSE
    
        // 5) Display the sorted field from largest to smallest
    echo "Sorted field (>): ";
    rsort($field);
    print_r($field);
    echo "<br>";

?>

</body>
</html>
