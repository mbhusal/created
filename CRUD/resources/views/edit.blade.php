<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">
		.form
		{
		 text-align: center;
		 padding:100px; 
		}
		.space
		{
			width: 250px;
			padding: 5px;
			margin: 5px;
		}
	</style>
</head>
<body>

<div class="container">
	<form  method="post" action="/crud/public/index.php/update/{{ $user->id }}" class="form">
	<h3><u>Update User</u></h3>

			{{ csrf_field() }}
	    
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" value="{{  $user->name }}" class="space"><br>

		<label for="email">E-mail:</label>
		<input type="text" name="email" id="email" value="{{ $user->email }}" class="space"><br>

		<label for="mobile">Mobile:</label>
		<input type="tel" name="mobile" id="mobile" value="{{  $user-> mobile}}" class="space"><br>

		<label>Country:</label>
		<select name="country" id="country" class="space">
			<option value="">--select--</option>
			<option value="Nepal">Nepal</option>
			<option value="India">India</option>
			<option value="Austrila">Austrila</option>
			<option value="USA">USA</option>
			<option value="UK">UK</option>
		</select><br>

		<label for="gender" value="{{  $user-> gender}}">Gender:</label>
		<input type="radio" name="gender" id="gender" value="female" >female
		<input type="radio" name="gender" id="gender" value="male" >male<br>

		<label></label>
		<input type="submit" name="update" value="Update">

	</form>
</body>
</html>