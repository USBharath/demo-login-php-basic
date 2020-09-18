<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="home index">
	<div class="wrap">
		<?php include_once 'includes/navbar.php'; ?>
		<section>
			<h3>Contact</h3>
			<div class="content">
				<form action="inc/contact.inc.php" method="POST">
					<input type="text" name="name" placeholder="Name">
					<input type="text" name="mail" placeholder="Email">
					<input type="text" name="subject" placeholder="Subject">
					<textarea rows="10" name="message" placeholder="Message" ></textarea>

					<button type="submit" name="submit" class="btn btn-submit">Send</button>
				</form>
			</div>
		</section>
		<?php include_once 'includes/footer.php'; ?>
	</div>
</body>
</html>