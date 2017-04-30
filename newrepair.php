<?php
include ("include/restrict.php");
include("include/heading.php");
?>


<div class="content">
  <h1>Add A New Repair</h1>
<?php 
error_reporting(0);
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }

 ?> 
 
 <form action="" method="post">
 <div>
 <strong>Customer Name: *</strong> <input type="text" name="name" value="" /><br/>
<strong>Manufacturer*:</strong>
<?php
include ('connect-db.php');
$sql = "SELECT name FROM manufacturers";
$rs = mysql_query($sql) or die(mysql_error());
echo "<select name='item'>";
while($row = mysql_fetch_array($rs)){
echo "<option value='".$row["name"]."'>".$row["name"]."</option>";
}mysql_free_result($rs);
echo "</select>";
?><br/>
<strong>Model No:*</strong><input type="text" name="modelno" value=""/><br/>

<strong>Request Part 1*:</strong>
<?php
include ('connect-db.php');
$sql = "SELECT name FROM parts";
$rs = mysql_query($sql) or die(mysql_error());
echo "<select name='required1'>";
while($row = mysql_fetch_array($rs)){
echo "<option value='".$row["name"]."'>".$row["name"]."</option>";
}mysql_free_result($rs);
echo "</select>";
?><br/>

<strong>Request Part 2</strong>
<?php
include ('connect-db.php');
$sql = "SELECT name FROM parts";
$rs = mysql_query($sql) or die(mysql_error());
echo "<select name='required2'>";
while($row = mysql_fetch_array($rs)){
echo "<option value='".$row["name"]."'>".$row["name"]."</option>";
}mysql_free_result($rs);
echo "</select>";
?><br/>
<strong>Desc: *</strong> <input type="text" name="description" value="" /><br/>
   <strong>Priority: * <select name="priority">
  <option value="High">High</option>
  <option value="Medium">Medium</option>
  <option value="Low">Low</option>
  <option value="Testing">Testing</option>
</select><br/>

<strong>Supplier</strong>
<?php
include ('connect-db.php');
$sql = "SELECT name,website FROM suppliers";
$rs = mysql_query($sql) or die(mysql_error());
echo "<select name='supplier'>";
while($row = mysql_fetch_array($rs)){
echo "<option value='".$row["website"]."'>".$row["name"]."</option>";
}mysql_free_result($rs);
echo "</select>";
?>
<br/>
<p>* required</p>
 <input type="submit" id="submit" name="submit" value="Submit">
 </div>
 </form> 
<br/>
<br/>
<br/>
 </body>
 </html>
 <?php 
 
 // connect to the database
 include('connect-db.php');
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 $name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
 $item = mysql_real_escape_string(htmlspecialchars($_POST['item']));
$modelno = mysql_real_escape_string(htmlspecialchars($_POST['modelno'])); 
$required1 = mysql_real_escape_string(htmlspecialchars($_POST['required1'])); 
$required2 = mysql_real_escape_string(htmlspecialchars($_POST['required2'])); 
$desc = mysql_real_escape_string(htmlspecialchars($_POST['description']));
$priority = mysql_real_escape_string(htmlspecialchars($_POST['priority']));
$supplier = mysql_real_escape_string(htmlspecialchars($_POST['supplier']));

 // check to make sure both fields are entered
 if ($name == '' || $item == ''||$modelno == ''||$required1 == ''||$desc == ''|| $priority== ''||$supplier=='')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 echo $error;
 // if either field is blank, display the form again
 renderForm($name, $item,$modelno,$required1,$required2,$desc,$priority,$supplier,$error);
 }
 else
 {
 // save the data to the database
 mysql_query("INSERT orders SET name='$name', item='$item',modelno='$modelno',required1='$required1',required2='$required2',description='$desc',priority='$priority',supplier='$supplier'")
 or die(mysql_error()); 

 $message='Addition Successful, Click Edit A Repair on the sidebar to view!';
 echo $message;
}
}
 
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','','');

 }
?>
 </div>
 </div>
</div>
<?php
include ("include/footers.php");
?>