<?php include_once 'db_connection.php'; 
$update = false;
$name = "";
$email ="";
$password ="";
$id =0;
if(isset($_GET['edit']))
{
  $update =true;
  $id = $_GET['edit'];
  $sql1 ="select * from students where id=$id";
$result = $conn->query($sql1);
$row=$result->fetch_assoc();
$id = $row['id'];
$name =$row['name'];
$email =$row['email'];
$password =$row['password'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body{
      background: #f5f5f5;
    }
    .card{
      box-shadow: 0 1px 6px rgba(57,73,76,.35);
    }
    .container-fluid{
      background: #000;
      height: 100px;
    }
    .bg{
      color: white;
    }
    label{
      color: white;
      float: left;
    }
    .btn-warning{
      margin-right: 10px !important;
      margin-left: 30px !important;
    }
    form{
      margin-top: 20px;
    }
  </style>
</head>
<body>

<div class="container-fluid ">
  <div class="row offset-2">
  <form class="form-inline" action="process.php" method="post">
    <input type="hidden" name="id" value="<?php  echo $id; ?>">
    <div class="col-md-3">
    <div class="form-group">
      <label for="name">Name:</label><br>
      <input value="<?php echo $name; ?>" type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label for="email">Email:</label><br>
      <input value="<?php echo $email; ?>" type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label for="pwd">Password:</label><br>
      <input value="<?php echo $password; ?>" type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
  </div>
  <div class="col-md-1">
     <div class="form-group">
       <label for="pwd"></label><br>
       <?php if($update==true): ?>
      <button type="submit" class="btn btn-primary" name="update">Update</button>
      <?php else: ?>
     <button type="submit" class="btn btn-primary" name="submit">Submit</button>
       <?php endif;?>
    </div>
  </div>
  
  </form>
  </div>
</div>
<?php 
$sql ="select * from students";
$result = $conn->query($sql);
 ?>
<div class="container">
  <div class="card">  
  <div class="card-header bg-success">
    <h2 class="text-center text-uppercase text-white">Student Information</h2>
  </div> 
  <div class="card-body">
    <div class="table-responsive">
  <table class="table table-bordered  text-center">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Email   </th>
        <th>Password</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $serialN_no =1;
      while ($row=$result->fetch_assoc()) {
       ?>
      <tr>
        <td><?php echo $serialN_no++; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td class="text-center"><a name="edit" href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a><a name="delete" href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Do you want to Delete this?');">Delete</a></td>
      </tr>
       <?php } ?>
    </tbody>
  </table>
</div>
</div>
  </div>
</div>
</body>
</html>