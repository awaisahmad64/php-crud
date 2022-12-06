<?php 
include_once 'config.php';
$result =$conn->query("select * from students");
$mydata=array();
while($row =$result->fetch_assoc()){
	$mydata[]=$row;
} 
$data = json_encode($mydata);
echo $data;

 ?>