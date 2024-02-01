<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<div class="text-center">
			<h1 class="text-center alert alert-info" style="color: green;">User Form</h1>
		</div>
		<div class="container">
			<div class="row" >
				<div class="col-12">
					<form method="POST" action="/form/store/">
						@csrf
						<div class="form-group">
							<label>Name:</label>
							<input type="text" name="name" class="form-control">
						</div>

						<div class="form-group">
							<label>Email:</label>
							<input type="email" name="email" class="form-control">
						</div>

						<div class="form-group">
							<label>Password:</label>
							<input type="password" name="password" class="form-control">
						</div>
						<button class="btn btn-success">Submit</button>
						<a href="/" class="btn btn-danger">Cancel</a>
					</form>
				</div>
			</div>
			
		</div>
	</div>


</body>
</html>