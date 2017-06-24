<?php
    include 'dbconfig.php';
    session_start();

    try{
        $user_check = $_SESSION['admin_username'];
        $ses_sql = mysqli_query($db,"SELECT * FROM admins WHERE username = '$user_check'");
        $row = mysqli_fetch_array($ses_sql, MYSQL_ASSOC);
        $login_user = $row['username'];

        if (!isset($_SESSION['admin_id']) && !isset($_SESSION['admin_username'])){
            header("location: ../index.php");
        }
    }catch (exception $e){
        echo '<script> alert("' . $e . '"");</script>';
    }