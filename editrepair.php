<?php
include ("include/restrict.php");
include("include/heading.php");
?>


<div class="content">
<h1>Current Repairs </h1>
<p><a href="newrepair.php">Add a new repair</a></p>
<?php
/* 
	VIEW.PHP
	Displays all data from 'orders' table
*/

	// connect to the database
	include('connect-db.php');

	// get results from database
	$result = mysql_query("SELECT * FROM orders") 
		or die(mysql_error());  
	echo "<table border='0' cellpadding='4'>";
	echo "<tr><th>Customer</th> <th>Item</th><th>Model</th><th>Desc</th><th>Status</th><th>Part 1</th> <th>Part 2</th> <th>Part 1 Link</th> <th>Part 2 Link</th> <th>Edit</th><th>Del</th></tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {
		
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $row['name'] . '</td>';
		echo '<td>' . $row['item'] . '</td>';
		echo '<td>' .$row['modelno'].'</td>';
		echo '<td>' .$row['description'].'</td>';
		echo '<td>' . $row['priority'] . '</td>';
		echo '<td>' .$row['required1'].'</td>';
		echo '<td>' .$row['required2'].'</td>';

//Now the Links.
	echo '<td><a href=" '.$row['supplier']." ".$row['item']." ".$row['modelno']." ".$row['required1'].'" target="_blank">Available</a></td>';
	echo '<td><a href=" '.$row['supplier']." ".$row['item']." ".$row['modelno']." ".$row['required2'].'"  target="_blank">Available</a></td>';
	echo '<td><a href="repairedit.php?id=' . $row['id'] . '">View</a></td>';
	echo '<td><a href="repairdelete.php?id=' . $row['id'] . '">Del</a></td>';
	echo "</tr>"; 
	} 

	// close table>
	echo "</table>";
?>
</div>
</div>
<?php
include("include/footers.php");
?>