<?php 
//$currentdir = getcwd();
// this is the array we use to store file extension
$error = [];
if(isset($_POST['submit'])){ 
$file_extensions_allowed = ['png','jpg'];
// this the var for to store error
// this is the directory name where we upload files
$uploaddir = "uploads/";
// file_name will store the name of image with extensionn
$file_name =$_FILES['filename']['name'];

// file_size will store the size of the image 
$file_size = $_FILES['filename']['size'];
// file_nane will store the name of tempoary address in var 
$file_tmp_name = $_FILES['filename']['tmp_name'];
// file type var will store the tpye of this image 
$file_type =$_FILES['filename']['type'];
// herer i use three built in function to catch image extension
$file_explode = explode(".", $file_name);
$catchextension = end($file_explode);
$file_extension = strtolower($catchextension);
// in this folder relative path of the file
$upload_path = $uploaddir.basename($file_name);
	if(! in_array($file_extension, $file_extensions_allowed)){
		$error[] = "This file extensionn is not valid. File extension should png and jpg";
	}
	if($file_size > 1000000){
		$error[] ="file size is exceeds ($MB)";
	}
	if (empty($error)) {
		$didupload = move_uploaded_file($file_tmp_name, $upload_path);
		if($didupload){
			echo "File <b>".$file_name." </b>  is uploaded";
		}
		else{
			echo "Error occured. Sorry!, File is not uploaded";
		}
	}
	else{
         foreach ($error as  $errors) {
            echo  $errors;
         }
	}
}
/*
// this is the coding of testing code
echo $currentdir;
$str = "ulpload/image.PHP";
$fileExtension = (strtolower(end(explode(".",$str))));
if($fileExtension ==="php")
{
echo "your file extension is valid";
}
else{
echo "file extension is not match";
} 
*/
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<a href="uploads/mubashir.jpg" download>Download Image here</a>
 </body>
 </html>
