<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$mydb = "ajaxcurd";
$conn = new mysqli($serverName, $userName, $password, $mydb);
if (!$conn) {
	echo "connection is not built";
}
 ?>