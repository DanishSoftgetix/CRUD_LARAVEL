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
			<h1 class="text-center alert alert-info" style="color: green;">Edit Page</h1>
		</div>
		<div class="container">
			<div class="row" >
				<div class="col-12">
					<form method="POST" action="/form/{{$form->id}}/update/">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label>Name:</label>
							<input type="text" name="name" class="form-control" value="{{ old('name',$form->name)}}">
						</div>

						<div class="form-group">
							<label>Email:</label>
							<input type="email" name="email" class="form-control" value="{{ old('email',$form->email )}}">
						</div>

						<div class="form-group">
							<label>Password:</label>
							<input type="password" name="password" class="form-control" value="{{ old('password',$form->password)}}">
						</div>
						<button class="btn btn-success">Edit</button>
						<a href="/" class="btn btn-info">Back</a>	
					</form>
				</div>
			</div>
			
		</div>
	</div>


</body>
</html>