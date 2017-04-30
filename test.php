<?php
$s = "localhost";
$u = "root";
$p = "";
$db = "hello";

$con = mysqli_connect($s,$u,$p,$db);

if(!$con){
	die("error");
}

$sql = "SELECT id,firstname,lastname FROM myGuests";
$result= mysqli_Query($con,$sql);

if(mysqli_num_rows($result) >0){
	while($row=mysqli_fetch_assoc($result)){

		echo "id" . $row["id"]. "<br>";
}
}else{
	echo "errorr";
}

