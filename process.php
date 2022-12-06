<?php 
include_once 'db_connection.php';
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$result = $conn->query("insert into students(name,email,password) values('$name','$email','$password')");
if($result){
  header("Location:index.php");
}
}
if(isset($_GET['delete'])){
$id= $_GET['delete'];
$result = $conn->query("delete from students where id = $id");
if($result){
  header("Location:index.php");
}
}
if(isset($_POST['update'])){
  $id =$_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$result = $conn->query("update students set name='$name', email='$email', password='$password' where id=$id");
if($result){
  header("Location:index.php");
}
}
?>