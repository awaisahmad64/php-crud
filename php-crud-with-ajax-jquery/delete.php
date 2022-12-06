<?php 
include_once 'config.php';
$data = file_get_contents("php://input");
$mydata = json_decode($data,true);
$id  = $mydata['id'];
$result = $conn->query("delete from students where id =$id");
if($result){
	echo "Record Deleted Successfully!";
}
else{
	echo "Record is not deleted due to erroc occured!";
}


 ?>