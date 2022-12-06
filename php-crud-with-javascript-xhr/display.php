<?php 
include_once 'config.php';
$result = $conn->query("select * from students");
if($result->num_rows > 0)
{ 
$data =array();
while ($row=$result->fetch_assoc()) {
	$data[]=$row;
}
}
echo json_encode($data);
 ?>