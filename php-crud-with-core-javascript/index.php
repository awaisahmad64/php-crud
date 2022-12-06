<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ajax practice</title>
        <link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<div class="container-fluid">
			<h1 class="bg-info text-white text-center">CRUD using Ajax with javascript and phpmysql</h1>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-header">
							<h3>Student Registration</h3>
						</div>
						<div class="card-body">
							<form id="myform">
								<div class="form-group">
									<label for="Name">Name</label>
									<input type="text" class="form-control" name="name" id="name">
								</div>
								<div class="form-group">
									<label for="FatherName">Father Name</label>
									<input type="text" class="form-control" name="fname" id="fname">
								</div>
								<div class="form-group">
									<label for="Eamail">Eamail</label>
									<input type="text" class="form-control" name="email" id="email">
								</div>
								<button id="addbtn" class="btn btn-primary">Register</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Father Name</th>
								<th>Email</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody id="tbody">
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<script src="js/main.js"></script>
	</body>
</html>