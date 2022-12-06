<?php 
$conn = new mysqli("localhost","root","","uniqeajax");
if(!$conn)
{
	echo "Connection failed!";
}
$mydata = file_get_contents("php://input");
$data = json_decode($mydata,true);
$name = $data['name'];
$fname = $data['fname'];
$email = $data['email'];
if(!empty($name) && !empty($fname) && !empty($email)){ 
$insert_query = "insert into student(name,fname,email) values('$name','$fname','$email')";
$result = $conn->query($insert_query);
if($result)
{
 echo "Record has been inserted successfully!";
}
else
{
 echo "Sorry, Record is not inserted!";
}
}
else{
	echo "All fieled are Required!";
}

 ?>