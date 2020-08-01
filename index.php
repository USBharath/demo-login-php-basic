<?php session_start(); ?>
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
		<?php
			include_once 'includes/navbar.php';
		?>
		<section>
			<h3>Home</h3>
			<?php
				if (isset($_SESSION["u_id"])) {
					echo "<p>You are logged !</p>";
				}
			?>
		</section>
		<?php include_once 'includes/footer.php'; ?>
	</div>
</body>
</html>