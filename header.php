<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />

<link rel="stylesheet" type="text/css" href="css/style.css" />

<title>Facebook Application</title>
<script type="text/javascript">
function checkCookie(){
var cookieEnabled=(navigator.cookieEnabled)? true : false   
if (typeof navigator.cookieEnabled=="undefined" && !cookieEnabled){ 
	document.cookie="testcookie";
	cookieEnabled=(document.cookie.indexOf("testcookie")!=-1)? true : false;
}
return (cookieEnabled)?true:showCookieFail();
}

function showCookieFail(){
document.write("<style type='text/css'> .container {display:none;}</style><div class='noscriptmsg'><center><p><h3>You don't have cookies enabled. Access to the site blocked, it may not work properly!</h3></p></center></div>");;
}
checkCookie();
</script>
<!-- check if java script is disabled and block the site content if so -->
<noscript>
<style type="text/css">
	.container {display:none;}
</style>
<div class="noscriptmsg">
 <center><p><h3>You don't have javascript enabled. Access to the site blocked, it may not work properly!</h3></p></center>
</div>
</noscript>

<script type="text/javascript">
function hideHint(box)
{
 document.getElementById(box).style.visibility='hidden';
}
function showHint(box)
{
 document.getElementById(box).style.visibility='visible';
}
</script>

</head>

<body>

<div class="container">
<div class="page">
	<div id="header">
		<div id="logo">
			Facebook App </div>
		<!-- logo -->

	</div><!-- header -->
</div><!-- page -->

<div id="headerbreak"></div>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fbapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<div class="page">
	<div class="leftnav">
		
		
	

	</div>
	<div id="content">


