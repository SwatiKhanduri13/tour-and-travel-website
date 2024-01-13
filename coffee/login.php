<?php include('server.php')?>
<!DOCTYPE html>
<html>

<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/signup_style.css">
</head>

<body style="background-image: url('images/login_background.jpg'); background-size: cover;">
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn11" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>

</body>

</html>
