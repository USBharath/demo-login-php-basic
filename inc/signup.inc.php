<?php 
	// check data back-end
	if (isset($_POST['submit'])) {
		// connert to database
		include_once 'db.inc.php';
		// except error special char
		$first = mysqli_real_escape_string($conn, $_POST['user_first']);
		$last = mysqli_real_escape_string($conn, $_POST['user_last']);
		$email = mysqli_real_escape_string($conn, $_POST['user_email']);
		$uid = mysqli_real_escape_string($conn, $_POST['user_uid']);
		$passwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);

		// Error handle
		// check for empty field
		if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($passwd)) {
			header("Location: ../signup.php?signup=empty");
			exit();
		}else {
			// check if input characters are valid
			if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
				header("Location: ../signup.php?signup=invalid");
				exit();
			}else {
				// check if email is valid
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../signup.php?signup=email");
					exit();
				}else {
					// check exist account
					$sql = "SELECT * FROM tb_users WHERE user_uid = '$uid'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						header("Location: ../signup.php?signup=exists");
						exit();
					}else {
						$hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);

						$sql = "INSERT INTO tb_users(user_uid, user_email, user_first, user_last, user_pwd) VALUES (?,?,?,?,?);";
						// create a prepared statement
						$stmt = mysqli_stmt_init($conn);
						if (!mysqli_stmt_prepare($stmt, $sql)) {
							echo 'SQL Statement failed !';
						}else {
							// bind parameters to the placehoder
							mysqli_stmt_bind_param($stmt, "sssss", $uid, $email, $first, $last, $hashedPwd);
							mysqli_stmt_execute($stmt);
							header("Location: ../signup.php?signup=success");
							exit();
						}
					}
				}
			}
		}
	}else {
		header("Location: ../signup.php?signup=error");
	}
	
 ?>