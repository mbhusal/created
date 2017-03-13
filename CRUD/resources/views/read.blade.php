<!DOCTYPE html>
<html>
<head>
	<title>read</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>


	<div class="container">

		<h3><button type="button" class="btn btn-primary"><a href="create" style="color: white;">Create New</a></button></h3>

		<table class="table table-hover table-condensed">
			<thead>
				<th>Id</th>
				<th>Name</th>
				<th>E-mail</th>
				<th>Mobile</th>
				<th>Gender</th>
				<th>Country</th>
				<th>Action</th>
			</thead>
			@foreach($user as $users)
			<tr>
				<td>{{$loop->index+1}}</td>
				<td>{{$users->name}}</td>
				<td>{{$users->email}}</td>
				<td>{{$users->mobile}}</td>
				<td>{{$users->gender}}</td>
				<td>{{$users->country}}</td>
				<td>
					<button type="button" class="btn btn-success"><a href="show/{{$users->id}}" style="color: white;">Show</a></button>
					<button type="button" class="btn btn-warning"><a href="edit/{{$users->id}}" style="color: white;">Edit</a></button>
					<button type="button" class="btn btn-danger"><a href="destroy/{{$users->id}}" style="color: white;">Destroy</a></button>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>	