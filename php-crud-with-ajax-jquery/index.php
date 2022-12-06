<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/load.js"></script>
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
    .btn-success{
      margin-right: 10px !important;
      margin-left: 30px !important;
    }
   
    form{
      margin-top: 20px;
    }
    #loader{
      position: absolute;
      width:100%;
      height: 100%;
      background: white;
      z-index: 1;
    }
    #loader h4{
      color:red;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
    }
    .container{
      z-index:-1;
    }
  </style>
</head>
<body>
 <div class="loader" id="loader">
   <h4><img src="loading.gif" alt=""></h4>
  </div>
<div class="container-fluid ">
  <div class="row offset-2">
  <form class="form-inline" id="myform"> 
    <div class="col-md-3">
    <div class="form-group">
      <label for="name">Name:</label><br>
      <input  type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label for="email">Email:</label><br>
      <input  type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label for="pwd">Password:</label><br>
      <input  type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
  </div>
  <div class="col-md-1">
     <div class="form-group">
       <label for="pwd"></label><br>
     <button type="submit" id="btnadd" class="btn btn-primary" name="submit">Submit</button>
    </div>
  </div>
  
  </form>
  </div>
</div>
<div class="container">
  <div class="card">  
  <div class="card-header bg-success">
    <h2 class="text-center text-uppercase text-white">Student Information</h2>
  </div> 
  <div class="card-body">
  <table class="table table-bordered text-center">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Email   </th>
        <th>Password</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id="tbody">
      <!--<tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class="text-center"><a name="edit" href="#"class="btn btn-warning">Edit</a><a name="delete" href="#" class="btn btn-danger">Delete</a></td>-->
 
    </tbody>
  </table>
</div>
  </div>
</div>
<!--<script src="js/jquery.js"></script>-->
<script src="js/insert.js"></script>
</body>
</html>
