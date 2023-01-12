<html>
<body>
    <form method="post">
        <label>Enter the array elements separated by comma:</label>
        <input type="text" name="field">
        <input type="submit" value="Submit">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // 0) Input from web form
            $input = $_POST['field'];
            $field = explode(",", $input);

            // 1) Display the entire field
            echo "Entire field: ";
            print_r($field);
            echo "<br>";

            // 2) Display the largest value
            echo "Largest value: ";
            echo max($field);
            echo "<br>";

            // 3) Display the smallest value
            echo "Smallest value: ";
            echo min($field);
            echo "<br>";

            // 4) Display the sorted field from smallest to largest
            echo "Sorted field (ascending): ";
            sort($field);
            print_r($field);
            echo "<br>";
        }
    ?>
</body>
</html>
