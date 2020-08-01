<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page Login System</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="home index">
	<div class="wrap">
		<nav class="nav nav-custom">
			<h1><a href="index.php" class="logo">LOGIN</a></h1>
			<form action="" method="POST" class="form-signin">
				<input type="text" name="user_uid" placeholder="Username or Email" autocomplete="none">
				<input type="password" name="user_pwd" placeholder="Password" autocomplete="none">
				<button type="submit">Login</button>
			</form>
			<a href="signup.php" class="btn btn-red signup">Register</a>
		</nav>
		<section>
			<h3>Sign Up</h3>
			<div class="content">
				<form action="#" method="POST">
					<input type="text" name="user_first" placeholder="First Name..." autocomplete="none">
					<input type="text" name="user_last" placeholder="Last Name..." autocomplete="none">
					<input type="email" name="user_email" placeholder="Email" autocomplete="none">
					<input type="text" name="user_uid" placeholder="Username" autocomplete="none">
					<input type="password" name="user_pwd" placeholder="Password" autocomplete="none">
					<button type="submit" class="btn btn-submit">Sign up</button>
				</form>
			</div>
		</section>
		<footer>
			<p>Design by <a href="https://www.facebook.com/PhiHoangOfficial" class="author" target="_blank">Phi Hoang</a> 2020 - 2021</p>
		</footer>
	</div>
</body>
</html>