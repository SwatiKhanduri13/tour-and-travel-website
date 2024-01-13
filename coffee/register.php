<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/signup_style.css">
</head>

<body style="background-image: url('images/img-11.jpg'); background-size: cover;">
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<button type="submit" class="btn11" name="reg_user">Register</button>
		</div>
	</form>
</body>

</html>
