
<?php
include ("include/restrict.php");
include("include/heading.php");
?>


<div class="content">
<h1>Parts</h1>
<p><a href="newparts.php">Add a new part</a></p>
<?php
/* 
	VIEW.PHP
	Displays all data from 'players' table
*/

	// connect to the database
	include('connect-db.php');

	// get results from database
	$result = mysql_query("SELECT * FROM parts") 
		or die(mysql_error());  
	
	echo "<table border='1' cellpadding='10'>";
	echo "<tr><th>ID</th> <th>Name</th> <th>Type</th> <th>Status</th><th>Edit</th><th>Delete</th></tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {
		
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $row['id'] . '</td>';
		echo '<td>' . $row['name'] . '</td>';
		echo '<td>' . $row['type'] . '</td>';
		echo '<td>' . $row['active'] . '</td>';
	echo '<td><a href="partsedit.php?id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="partsdelete.php?id=' . $row['id'] . '">Delete</a></td>';
		echo "</tr>"; 
	} 

	// close table>
	echo "</table>";
?>
</div>
</div>
<?php
include ("include/footers.php");
?>