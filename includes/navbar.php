<nav class="nav nav-custom">
    <h1><a href="index.php" class="logo">LOGIN</a></h1>
    <?php if (isset($_SESSION["u_id"])) { ?>
        <h4>Hello , <?php echo $_SESSION["u_uid"]; ?></h4>
        <a href="inc/logout.inc.php" class="btn btn-red signup">Logout</a>
    <?php }else{ ?>
        <form action="inc/sigin.inc.php" method="POST" class="form-signin">
            <input type="text" name="user_uid" placeholder="Username or Email" autocomplete="none">
            <input type="password" name="user_pwd" placeholder="Password" autocomplete="none">
            <button type="submit" name="submit">Login</button>
        </form>
        <a href="signup.php" class="btn btn-red signup">Register</a>
    <?php } ?>

</nav>