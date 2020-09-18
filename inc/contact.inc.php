<?php 
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$mail = $_POST['mail'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$mailto = "hoangtu.work@gmail.com";
		$headers = "From: ".$mail;
		$text = "You have received an email form ".$name.".\n\n".$message;

		mail($mailto, $subject, $text, $headers);
		header("Location: ../contact.php?mailsend=ok");
		exit();
	}

 ?>