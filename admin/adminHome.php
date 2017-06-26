<?php
    include "php/includes/sessionUtils.php";
    $session = new sessionUtils();
    $username = $_SESSION['admin_username'];
    $id = $_SESSION['admin_id'];
    $session->checkSession($username);
?>

<html>
    <head>
        <title>Admin Home</title>
    </head>
    <body>
        <h1>Welcome <?php echo $username;?></h1><br>
        <a href="php/alogout.php">Logout</a>
    </body>
</html>
