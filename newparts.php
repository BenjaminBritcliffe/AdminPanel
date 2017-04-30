<?php
include ("include/restrict.php");
include("include/heading.php");
?>


<div class="content">
  <h1>Add A New Part</h1>
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
 <strong>name: *</strong> <input type="text" name="name" value="" /><br/>
 <strong>type: *</strong> <input type="text" name="type" value="" /><br/>
<strong>status: * <select name="active">
  <option value="Active">Active</option>
  <option value="Legacy">Legacy</option>
  <option value="Testing">Testing</option>
</select>

 <p>* required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
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
 $type = mysql_real_escape_string(htmlspecialchars($_POST['type']));
  $active = mysql_real_escape_string(htmlspecialchars($_POST['active']));
 
 // check to make sure both fields are entered
 if ($name == '' || $type == ''|| $active == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 echo $error;
 
 // if either field is blank, display the form again
 renderForm($name, $type,$active,$error);
 }
 else
 {
 // save the data to the database
 mysql_query("INSERT parts SET name='$name', type='$type',active='$active'")
 or die(mysql_error()); 
 
 $message='Addition Successful, Click Edit A Part on the sidebar to view!';
 echo $message;
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','');
 }
?>
 </div>
 </div>
</div>
<?php
include ("include/footers.php");
?>