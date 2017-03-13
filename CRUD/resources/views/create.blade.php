<!DOCTYPE html>
<html>
<head>
	<title>create</title>
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
	<div class="container"	>
		
		
		<form action="store" method="post" class="form">
				<h3><u>Add New User</u></h3>
				{{ csrf_field() }}
		    
			<label for="name">Name:</label>
			<input type="text" name="name" class="space"><br>

			<label for="email">E-mail:</label>
			<input type="text" name="email" class="space"><br>

			<label for="mobile">Mobile:</label>
			<input type="tel" name="mobile" class="space"><br>

			<label>Country:</label>
			<select name="country" id="country" class="space">
				<option value="">--Select--</option>
				<option value="np">Nepal</option>
				<option value="ind">India</option>
				<option value="aus">Austrila</option>
				<option value="usa">Usa</option>
				<option value="uk">Uk</option>
			</select><br>
			
			<label for="gender" >Gender:</label>
			<input type="radio" name="gender" value="Female" >female
			<input type="radio" name="gender" value="Male" >male<br><br>

			<label></label>
			<input type="submit" name="save" value="Save" style="color:white; background-color: blue; height: 30px; width: 70px;">

		</form>
	</div>
</body>
</html>