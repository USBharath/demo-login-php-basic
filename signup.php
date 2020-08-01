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
		<?php include_once 'includes/navbar.php'; ?>
		<section>
			<h3>Sign Up</h3>
			<div class="content">
				<form action="inc/signup.inc.php" method="POST">
					<input type="text" name="user_first" placeholder="First Name..." autocomplete="none">
					<input type="text" name="user_last" placeholder="Last Name..." autocomplete="none">
					<input type="email" name="user_email" placeholder="Email" autocomplete="none">
					<input type="text" name="user_uid" placeholder="Username" autocomplete="none">
					<input type="password" name="user_pwd" placeholder="Password" autocomplete="none">
					<button type="submit" name="submit" class="btn btn-submit">Sign up</button>
				</form>
			</div>
		</section>
		<?php include_once 'includes/footer.php'; ?>
	</div>
</body>
</html>