<html>
<head>
<title>Dashboard</title> <!--Tab Name-->
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/tables.css" />
<meta name="viewport" content="width=device-width, initial-scale 1.0, user-scalable=0">

<script src="scripts/jquery.js"></script><!--For Article section-->
<script src="scripts/general.js"></script>
</head>

<body>
	<div id="header"> <!--Header-->
	<div class="logo"><a href="index.php">PC<span>Repair</span></div>
</div>

<a class="mobile" href="systemupdatemessage.php"> <!--System Message bar-->
<h5>System Update: Welcome to the new system</h5>
</div>
</a>
</div>

<div id="container">
<div class="sidebar"> <!--Navigation Bar-->
<ul id="nav">
<br/><li><a class="selected" href='index.php'><br><img src="images/home.png">&nbsp;Homepage</a></li>
<li><a href='newrepair.php'><br><img src="images/repair.png">&nbsp;New repair</a></li>
<li><a href='editrepair.php'><br><img src="images/edit.png">&nbsp;Edit a repair</a></li>
<li><a href='editmanufacturer.php'><br><img src="images/manu.png">&nbsp;Add/Edit Manufacturer</a></li>
<li><a href='editsuppliers.php'><br><img src="images/supplier.png">&nbsp;Add/Edit Suppliers</a></li>
<li><a href='editparts.php'><br><img src="images/cog.png">&nbsp;Add/Edit Parts</a></li>
<li><a href='ContactUs.php'><br><img src="images/help.png">&nbsp;Contact Us/Help</a></li>
<li><a href="<?php echo $logoutAction ?>"><br><img src="images/logout.png">&nbsp;Log out</a></li>
</ul>
</div>