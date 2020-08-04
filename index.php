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
		<?php include_once 'includes/navbar.php';?>
		<section>
			<h3>Home</h3>
			<div class="wrap-img">
                <div class="content-allimg">
                    <div class="card card-user">
                        <img src="uploads/profiledefault.jpg" alt="" class="img-user">
                        <span class="name-user">Phi Hoang</span>
                        <span class="email-user">hoangphi.dev@gmail.com</span>
                    </div>
                    <div class="card card-user">
                        <img src="uploads/profiledefault.jpg" alt="" class="img-user">
                        <span class="name-user">Phi Hoang</span>
                        <span class="email-user">hoangphi.dev@gmail.com</span>
                    </div>
                    <div class="card card-user">
                        <img src="uploads/profiledefault.jpg" alt="" class="img-user">
                        <span class="name-user">Phi Hoang</span>
                        <span class="email-user">hoangphi.dev@gmail.com</span>
                    </div>
                    <div class="card card-user">
                        <img src="uploads/profiledefault.jpg" alt="" class="img-user">
                        <span class="name-user">Phi Hoang</span>
                        <span class="email-user">hoangphi.dev@gmail.com</span>
                    </div>
                    <div class="card card-user">
                        <img src="uploads/profiledefault.jpg" alt="" class="img-user">
                        <span class="name-user">Phi Hoang</span>
                        <span class="email-user">hoangphi.dev@gmail.com</span>
                    </div>
                    <div class="card card-user">
                        <img src="uploads/profiledefault.jpg" alt="" class="img-user">
                        <span class="name-user">Phi Hoang</span>
                        <span class="email-user">hoangphi.dev@gmail.com</span>
                    </div>
                </div>
                <div class="content-selfimg">
                    <div class="wrap-selfimg">
                    <?php

                        if (isset($_SESSION['u_id'])) {
                            echo '<img src="uploads/profiledefault.jpg" alt="" class="img-user selfuser">
                            <p class="name-selfuser selfname">Phi Hoang</p>
                            <form class="form-upload-profile" action="" method="POST" enctype="multipart/form-data">
                                <button class="btn btn-upload">Change your profile</button>
                                <input type="file" name="uploadFileAvatar">
                            </form>';
                            
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