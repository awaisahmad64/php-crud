<?php 
$conn = new mysqli("localhost","root","","uniqeajax");
if(!$conn)
{
	echo "Connection failed!";
}
$retrievequery ="select * from student";
$result = $conn->query($retrievequery);
$mydata = array();
if($result->num_rows > 0){
     while($row=$result->fetch_assoc()){
     	$mydata[]=$row;
     }
}
else{
	echo "Record is Empty";
}
$data = json_encode($mydata);
echo $data;


?>