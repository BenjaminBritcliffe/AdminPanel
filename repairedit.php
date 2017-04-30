<?php
include ("include/restrict.php");
include("include/heading.php");
?>


<div class="content">
 
<?php
error_reporting(0);
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($id, $name,$item,$modelno,$req1,$req2,$desc,$priority,$supplier,$error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Edit Record</title>
 </head>
 <body>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <input type="hidden" name="id" value="<?php echo $id; ?>"/>
 <div>
 
 <p><strong>ID:</strong> <?php echo $id; ?></p>
<form action="" method="post">
 <div>
 <strong>Customer Name: *</strong> <input type="text" name="name" value="" /><br/>
<strong>Manufacturer:</strong>
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

<strong>Part #1 Required:</strong>
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

<strong>Part #2 Required</strong>
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
  <option value="Difficulties">Experiencing Difficulties</option>
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
<p>* required</p>
 <input type="submit" name="submit" value="Submit">

 </div>
 </form> 
 </body>
 </html> 
 <?php
 }



 // connect to the database
 include('connect-db.php');
 
 // check if the form has been submitted. If it has, process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // confirm that the 'id' value is a valid integer before getting the form data
 if (is_numeric($_POST['id']))
 {
 // get form data, making sure it is valid
 $id = $_POST['id'];
 $name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
  $item = mysql_real_escape_string(htmlspecialchars($_POST['item']));
$modelno = mysql_real_escape_string(htmlspecialchars($_POST['modelno']));
  $req1 = mysql_real_escape_string(htmlspecialchars($_POST['required1']));
  $req2 = mysql_real_escape_string(htmlspecialchars($_POST['required2']));
 $desc = mysql_real_escape_string(htmlspecialchars($_POST['description']));
 $priority= mysql_real_escape_string(htmlspecialchars($_POST['priority']));
  $supplier = mysql_real_escape_string(htmlspecialchars($_POST['supplier']));
 // check that firstname/lastname fields are both filled in
 if ($name == '' || $item == '' || $modelno == ''||$req1 == ''|| $req2 == ''||$desc == ''|| $priority == ''|| $supplier == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
 renderForm($id, $name,$item,$modelno,$req1,$req2,$desc,$priority,$supplier,$error);
 }
 else
 {
 // save the data to the database
 mysql_query("UPDATE orders SET name='$name', item ='$item', modelno ='$modelno', required1 ='$req1',required2 ='$req2',description='$desc', priority='$priority', supplier ='$supplier' WHERE id='$id'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location:editrepair.php"); 
 }
 }
 else
 {
 // if the 'id' isn't valid, display an error
 echo 'Error!';
 }
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
 if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
 {
 // query db
 $id = $_GET['id'];
 $result = mysql_query("SELECT * FROM orders WHERE id='$id'")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 $name = $row['name'];
 $modelno = $row['modelno'];
 
 // show form
 renderForm($id, $name, $modelno, '');
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
 {
 echo 'Error!';
 }
 }
?>
 </div>
 
</div>
</div>
<?php
include ("include/footers.php");
?>