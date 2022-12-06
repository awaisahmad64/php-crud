<?php 
include_once 'config.php';
$data = file_get_contents("php://input");
$mydata =json_decode($data,true);
//print_r($mydata);
$name = $mydata['name'];
$email = $mydata['email'];
$password = $mydata['password'];
if(!empty($name) && !empty($email) && !empty($password))
{
$result =$conn->query("insert into students(name,email,password) values('$name','$email','$password')");
if ($result){
	echo "Data has been successfully created";
}
else{
	echo "Connection faided";
}
}
else{
	echo "All fields are required!";
}


 ?>