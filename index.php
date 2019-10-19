<?php

// Read JSON file
$json = file_get_contents('./sample.json');

//Decode JSON
$json_data = json_decode($json,true);

//Print data
//echo($json_data);

if (count($data->stand)) {
        // Open the table
        echo "<table>";

        // Cycle through the array
        foreach ($data->stand as $idx => $stand) {

            // Output a row
            echo "<tr>";
            echo "<td>$stand->afko</td>";
            echo "<td>$stand->positie</td>";
            echo "</tr>";
        }

        // Close the table
        echo "</table>";
    }

?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hack Asia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
 
<div class="container" style="overflow-x:auto;">
  <h2>Project List</h2>
  <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
				<th>Project Name</th>
				<th>Project Service</th>
				<th>Project Type</th>
                <th>POC Name</th>
				<th>Appointment</th>
                <th>Contact No.</th>
                <th>Last Modified</th>
                <th>Last Modified By</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>MOANA</td>
                <td>Navy</td>
                <td>IKC2</td>
                <td>MAUI The Rock</td>
                <td>OM</td>
				<td>1111</td>
                <td>28 May 2019, 15:57</td>
				<td>Admin</td>
            </tr>
            <tr>
                <td>MOANA</td>
                <td>NAVY</td>
                <td>IKC2</td>
                <td>TUI The Chief</td>
                <td>SA</td>
                <td>1111</td>
				<td>28 May 2019, 15:57</td>
				<td>Admin</td>
            </tr>
            <tr>
                <td>SHREK</td>
                <td>Army</td>
                <td>Internet-Connected</td>
                <td>Puss In Boots</td>
                <td>OM</td>
                <td>1111</td>
				<td>28 May 2019, 15:57</td>
				<td>Admin</td>
            </tr>
            <tr>
                <td>SUPERMARIO</td>
                <td>Airforce</td>
                <td>Internet-Connected</td>
                <td>BROWSER</td>
                <td>SM</td>
                <td>1111</td>
				<td>28 May 2019, 15:57</td>
				<td>Admin</td>
            </tr>
            <tr>
                <td>MARVEL</td>
                <td>Joint</td>
                <td>IKC2</td>
                <td>Rat</td>
                <td>OM</td>
                <td>1111</td>
				<td>28 May 2019, 15:57</td>
				<td>Admin</td>
            </tr>
            <tr>
                <td>POCKETMONSTER</td>
                <td>Intel</td>
                <td>Internet-Connected</td>
                <td>Pika Chew</td>
                <td>SA</td>
                <td>1111</td>
				<td>28 May 2019, 15:57</td>
				<td>Admin</td>
            </tr>
            <tr>
                <td>SESAMESTREET</td>
                <td>Army</td>
                <td>Internet-Facing</td>
                <td>Ernie Bert</td>
                <td>SM</td>
                <td>1111</td>
				<td>28 May 2019, 15:57</td>
				<td>Admin</td>
            </tr>
			<tr>
                <td>SESAMESTREET</td>
                <td>Army</td>
                <td>Internet-Facing</td>
                <td>Cookie Monster</td>
                <td>OM</td>
                <td>1111</td>
				<td>28 May 2019, 15:57</td>
				<td>Admin</td>
            </tr>
        </tbody>
    </table>
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</body>
</html>
-->
