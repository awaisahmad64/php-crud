<?php 
include_once 'config.php';
$data =file_get_contents("php://input");
$mydata =json_decode($data,true);
print_r($mydata);

 ?>