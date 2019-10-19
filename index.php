<?php

// Read JSON file
$json = file_get_contents('sample.json');

//Decode JSON
$data = json_decode($json,true);

//Print data
print_r($data);

if (count($data->test_data)) {
        // Open the table
        echo "<table>";

        // Cycle through the array
        foreach ($data->test_data as $idx => $test_data) {

            // Output a row
            echo "<tr>";
            echo "<td>$test_data->name</td>";
            echo "<td>$test_data->title</td>";
            echo "</tr>";
        }

        // Close the table
        echo "</table>";
    }

?>
<!--
<!DOCTYPE html>
<html lang="en">
</html>
-->
