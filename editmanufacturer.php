<?php
include ("include/restrict.php");
include("include/heading.php");
?>


<div class="content">
<h1>Manufacturers</h1>
<p><a href="newmanufacturer.php">Add a new manufacturer</a></p>
<?php
/* 
	VIEW.PHP
	Displays all data from 'players' table
*/

	// connect to the database
	include('connect-db.php');

	// get results from database
	$result = mysql_query("SELECT * FROM manufacturers") 
		or die(mysql_error());  
	
	echo "<table border='1' cellpadding='10'>";
	echo "<tr><th>ID</th> <th>Name</th> <th>Status</th> <th>Edit</th> <th>Delete</th> </tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {
		
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $row['id'] . '</td>';
		echo '<td>' . $row['name'] . '</td>';
		echo '<td>' . $row['active'] . '</td>';
		
	echo '<td><a href="manuedit.php?id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="manudelete.php?id=' . $row['id'] . '">Delete</a></td>';
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