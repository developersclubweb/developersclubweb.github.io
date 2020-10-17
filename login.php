<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(9923.jpg);
	background-size: cover;
	background-position: center;">

	<div class="container">
		<div class="login-box" style="max-width: 700px;
	float: none;
	margin: 150px;">
		<div class="row">
		<div class="col-md-6 login-left" style="background: #fff;
	padding: 30px;">
			<h2>Login Here</h2>
			<form action="validation.php" method="post">
				<div class="form-group" style="background-color: transparent !important;">
					<label>Username</label>
					<input type="text"  name="user" class="form-control" required >
				</div>
				<div class="form-group" style="background-color: transparent !important;">
					<label>Password</label>
					<input type="Password" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>	

		<div class="col-md-6 login-right" style="background: rgba(211,211,211,0.5);
	padding: 30px;">
			<h2>Register Here</h2>
			<form action="registration.php" method="post">
				<div class="form-group" style="background-color: transparent !important;">
					<label>Username</label>
					<input type="text"  name="user" class="form-control" required>
				</div>
				<div class="form-group" style="background-color: transparent !important;">
					<label>Password</label>
					<input type="Password"  name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>	
		</div>
		</div>
	</div>
</body>
</html>