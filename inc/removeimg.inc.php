<?php
    session_start();
    include_once 'db.inc.php';
    $id = $_SESSION['u_id'];

    if (isset($_POST['submit'])) {
        $sql = "UPDATE tb_profiles_img SET status = 1 WHERE user_id = '$id'";
        mysqli_query($conn, $sql);

        unlink('../uploads/' . 'profile' . $id . '.jpg');
        header("Location: ../index.php?removeimg=success");
        exit();
    }
?>