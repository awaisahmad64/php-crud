<?php 

$serverName = "localhost";
$userName = "root";
$pwd = "";
$mydb = "ajaxcurd";
$conn = new mysqli($serverName, $userName, $pwd, $mydb);
if(!$conn){
	die("connection failed");
}