<?php require_once('connect-db.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password= md5($_POST['password']);
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed ="incorrect.html";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_localhost, $localhost);
  
  $LoginRS__query=sprintf("SELECT username,password FROM `admin` WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $localhost) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<style type="text/css">
body,td,th {
	font-family: "Open Sans";
	color: #333333;
}
body {
	background-color: #009999;
	background-image: url(images/loginpaper.jpg);
	background-repeat: repeat;
}
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initia-scale 1.0, user-scalable=0">

<script src="scripts/jquery.js"></script>
<script src="scripts/general.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<form name="login" method="POST" action="<?php echo $loginFormAction; ?>">
  <span id="sprytextfield1">
  <label>	
  <br>
  <br>
<div align="center">
  <h1>LOGIN TO THE SYSTEM<br>
    <br>
    USERNAME</h1>
  <h1>
    <input type="text" name="username" id="username">
</h1>
  </div>
  </label>
    <h1 align="center">PASSWORD</h1>
  </div>
  </span>
  <p align="center"><span id="sprypassword1">
    <label>
      <input type="password" name="password" id="password">
      </label>
    <br/>
  <p align="center">
    <input type="submit" name="submit" id="submit" value="Submit"><br/>
    <a href="register.php">Registration</a><br>
    <a href="def.php" target="_blank">Default Credentials</a>
   </p>
  <p align="center">&nbsp;</p>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>

<?php
include ("include/footers.php");
?>