<?php
include ("include/restrict.php");
include("include/heading.php");
?>



<div class="content"> <!--Main Section-->
<h1>Homepage</h1>
<p>Notices:</p>
<!--Multiple Here-->
<div id="box">
<div class="box-top">Repair Statuses:</div>
<div class="box-panel">
<?php 
include("connect-db.php");
$result = mysql_query("select count(1) FROM orders"); //Default algorithm
$row = mysql_fetch_array($result);

$total = $row[0];
echo "Total Jobs: " . $total;

mysql_close();
?>
<br/>
<!--Start Sort, creates fancy statistics-->
<div class="difficulties">
<?php 
include("connect-db.php");
$result = mysql_query("select count(1) FROM orders WHERE priority = 'difficulties'");
$row = mysql_fetch_array($result);

$total = $row[0]; 
echo "Experiencing difficulties : " . $total;

mysql_close();
?>
<br>
&nbsp;
</div><!--CLOSE Statistics-->
<!--Start Sort, creates fancy statistics-->
<div class="high">
<?php 
include("connect-db.php");
$result = mysql_query("select count(1) FROM orders WHERE priority = 'High'");
$row = mysql_fetch_array($result);

$total = $row[0]; 
echo "High Priority : " . $total;

mysql_close();
?>
&nbsp;
</div><!--CLOSE Statistics-->

<!--Start Sort, creates fancy statistics-->
<div class="medium">
<?php 
include("connect-db.php");
$result = mysql_query("select count(1) FROM orders WHERE priority = 'Medium'");
$row = mysql_fetch_array($result);

$total = $row[0]; 
echo "Medium Priority : " . $total;

mysql_close();
?>
&nbsp;
</div><!--CLOSE Statistics-->

<!--Start Sort, creates fancy statistics-->
<div class="low">
<?php 
include("connect-db.php");
$result = mysql_query("select count(1) FROM orders WHERE priority = 'Low'");
$row = mysql_fetch_array($result);

$total = $row[0]; 
echo "Low Priority : " . $total;

mysql_close();
?>
&nbsp;
</div><!--CLOSE Statistics-->

<!--Start Sort, creates fancy statistics-->
<div class="testing">
<?php 
include("connect-db.php");
$result = mysql_query("select count(1) FROM orders WHERE priority = 'Testing'");
$row = mysql_fetch_array($result);

$total = $row[0]; 
echo "Testing Priority : " . $total;

mysql_close();
?>
&nbsp;
</div><!--CLOSE Statistics-->

</div><!--Box top close-->
</div><!--Box Panel Close-->
<!--End Multiple-->

<!--Multiple Here-->
<div id="box">
<div class="box-top">User Manual</div>
<div class="box-panel"><a href='_notes/UserM.pdf' target="_blank">AVAILABLE</a></div>
</div>
<!--End Multiple-->
<!--Multiple Here-->
<div id="box">
<div class="box-top">WELCOME</div>
<div class="box-panel">Welcome to the new system, Version 1.0 is the current version, Please allow for bugs at this current time.</div>
</div>
<!--End Multiple-->
<!--Multiple Here-->
<div id="box">
<div class="box-top">System Updates</div>
<div class="box-panel"><a href='systemupdatemessage.php'>Updates will be placed here.</a></div>
</div>
<!--End Multiple-->

</div>
</div>
<?php
include ("include/footers.php");
?>