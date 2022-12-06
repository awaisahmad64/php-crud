<?php
include_once 'config.php';
$data =file_get_contents("php://input");
$mydata =json_decode($data,true);
//print_r($mydata);
$name = $mydata['name'];
$email = $mydata['email'];
$password = $mydata['password'];
if(!empty($name) && !empty($email) && !empty($password))
{ 
    $result = $conn->query("insert into students(name,email,password) values('$name','$email','$password')");
    if($result){
    	echo "Data has been inserted successfully!";
    }
   else{
   	echo "Error in query.";
   }


}
else{
	echo "All field are required!";
}

 ?>