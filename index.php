<?php 
	session_start(); 
	include_once 'inc/db.inc.php';
?>
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
		<?php include_once 'includes/navbar.php';?>
		<section>
			<h3>Home</h3>
			<div class="wrap-img">
                <div class="content-allimg">
                	<?php 
                		// get all data (have user id)
                		$sql = "SELECT * FROM tb_users";
                		$result = mysqli_query($conn, $sql);
                		if (mysqli_num_rows($result) > 0) {
                			while ($row = mysqli_fetch_assoc($result)) {
                				echo '<div class="card card-user">';
                			    $id = $row['user_id'];

                			    $sql_img = "SELECT * FROM tb_profiles_img WHERE user_id = '$id'";
                			    $result_img = mysqli_query($conn, $sql_img);

                			    while ($rows_img = mysqli_fetch_assoc($result_img)) {
                			        if ($rows_img['status'] == 0) {
                			        	echo '<img src="uploads/'.'profile'.$id.'.jpg" alt="" class="img-user">
                			        			<span class="name-user">'.$row['user_first'].' '.$row['user_last'].'</span>
				                        	<span class="email-user">'.$row['user_email'].'</span>
				                    	</div>';
                			        }else {
                			        	echo '<img src="uploads/profiledefault.jpg" alt="" class="img-user">
                			        		<span class="name-user">'.$row['user_first'].' '.$row['user_last'].'</span>
				                        	<span class="email-user">'.$row['user_email'].'</span>
				                    	</div>';
                			        }
                			    }
                			}
                		}else {
                			echo "<p> There are no user yet !!! </p>";
                		}
                		// because of knowing user id, so print avatar
                		 
                	 ?>
                </div>
                <div class="content-selfimg">
                    <div class="wrap-selfimg">
                    <?php

                        if (isset($_SESSION['u_id'])) {

                        	$id = $_SESSION['u_id'];
                        	$sql = "select * from tb_profiles_img where user_id = '$id'";
                        	$result = mysqli_query($conn, $sql);
                        	if (mysqli_num_rows($result) > 0) {
                        		$row = mysqli_fetch_assoc($result);
                        		if ($row['status'] == 0) {
		                           	echo 	'<img src="uploads/'.'profile'.$id.'.jpg" alt="" class="img-user selfuser">';
                        		}else{
									echo 	'<img src="uploads/profiledefault.jpg" alt="" class="img-user selfuser">';
								}
								echo 	'<p class="name-selfuser selfname">'.$_SESSION['u_first'].' '.$_SESSION['u_last'].'</p>
			                           	<form action="inc/upload.inc.php" method="POST" enctype="multipart/form-data">
											<input type="file" name="file_upload">
											<button type="submit" name="submit">UPLOAD</button>
										</form>';
								echo '<form action="inc/removeimg.inc.php" method="POST" enctype="multipart/form-data">
											<button type="submit" name="submit" class="btn" style="margin-top: 10px;">REMOVE Avatar</button>
										</form>';
                        	}
                            
                        } else {
                            echo "<p>You are not logged in!</p>";
                        }
                    ?>
                        
                    </div>
                </div>
            </div>
		</section>
		<?php include_once 'includes/footer.php'; ?>
	</div>

</body>
</html>