<?php
// Connect to MySQL
include("connect-db.php");
// Delete Bobby from the "example" MySQL table
mysql_query("DELETE FROM admin WHERE username='admin' and password='5f4dcc3b5aa765d61d8327deb882cf99' and name='Default' ") 
or die(mysql_error());  
header("Refresh:0; url=login.php");
?>