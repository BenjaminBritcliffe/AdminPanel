<?php
/* 
 CONNECT-DB.PHP
 Allows PHP to connect to your database
*/

 // Database Variables (edit with your own server information)
 $server = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'pcrepair';

 // Connect to Database
 $connection = @mysql_connect($server, $user, $pass) 
 or die ("Could not connect to server ... \n" . mysql_error ());
 mysql_select_db($db) 
 or die ("Could not connect to database ... \n" . mysql_error ());

 
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_localhost = "localhost";
$database_localhost = "pcrepair";
$username_localhost = "root";
$password_localhost = "";
$localhost = @mysql_pconnect($hostname_localhost, $username_localhost, $password_localhost) or trigger_error(mysql_error(),E_USER_ERROR); 
?>