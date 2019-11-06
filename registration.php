<!--https://www.youtube.com/watch?v=NXAHkqiIepc-->
<html>
	<head>
		<title> User Login and Registration </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container">
	<br><br>
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-right">
			<h2> Sign up Here </h2>
			<form action="register.php" method="post">
				<div class="form-group">
				<label> Username</label>
				<input type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">
				<label> Password</label>
				<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
				<label> Phone number</label>
				<input type="text" name="number" class="form-control" required>
				</div>
				<div class="form-group">
				<label> Address</label>
				<input type="text" name="address" class="form-control" required>
				</div>
				<div class="form-group">
				<label> Email Id</label>
				<input type="email" name="email" class="form-control" required>
				</div>
				
				<button type="submit" class="btn btn-primary"> Register </button>
			</form>
		</div>

		
		</div>
		
	</div>
	</div>
	
	</body>
</html>