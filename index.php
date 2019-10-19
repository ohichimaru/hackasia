<?php

    // Read JSON file
    $json = file_get_contents('./public/sample.json');

    //Decode JSON
    $data = json_decode($json,true);

    
    echo '<table>';
    
    foreach ($data as $result) {
        echo '<tr>';
            echo '<td>'.$result->name.'</td>';
            echo '<td>'.$result->title.'</td>';
            echo '<td>'.$result->post.'</td>';
        echo '</tr>';
    }

    echo '</table>';

?>
<!--  -->
<!--
<!DOCTYPE html>
<html lang="en">
</html>
-->
