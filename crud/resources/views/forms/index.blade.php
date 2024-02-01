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
			<h1 class="text-center alert alert-info" style="color: green;">CRUD LARAVEL</h1>
		</div>
		<div class="text-right">
			<a href="form/create" class="btn btn-info">New User</a>
		</div>
		<div class="text-center">
			<table class="table table-light table-hover">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($forms as $form)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $form->name }}</td>
        <td>{{ $form->email }}</td>
        <td>{{ $form->password }}</td>
        <td>
        	<a href="form/{{$form->id}}/edit" class="btn btn-success">Edit</a>
        	<a href="form/{{$form->id}}/delete" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>

</body>
</html>