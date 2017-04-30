<?php
include('connect-db.php');

	// get results from database
	$result = mysql_query("SELECT * FROM orders") 
		or die(mysql_error());  
	echo "<table border='1' cellpadding='10'>";
	echo "<tr><th>ID</th> <th>Name</th> <th>Item</th><th>ModelNo.</th> <th>Desc</th> <th>Priority</th>< <th>Link</th> <th>Edit</th><th>Delete</th></tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {
		
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $row['id'] . '</td>';
		echo '<td>' . $row['name'] . '</td>';
		echo '<td>' . $row['item'] . '</td>';
		echo '<td>' .$row['modelno'].'</td>';
		echo '<td>' . $row['description'] . '</td>';
		echo '<td>' . $row['priority'] . '</td>';
		echo '<td><a href="http://www.amazon.co.uk/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=' . $row['item'] .'">Link</a></td>';
	echo '<td><a href="repairedit.php?id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="repairdelete.php?id=' . $row['id'] . '">Delete</a></td>';
		echo "</tr>"; 
	} 

	// close table>
	echo "</table>";
?>