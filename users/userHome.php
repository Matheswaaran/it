<?php
    include "php/includes/sessionUtils.php";
    $session = new sessionUtils();
    $username = $_SESSION['user_username'];
    $uid = $_SESSION['user_id'];
    $session->checkSession($username);
?>

<html>
    <head>
        <title>User Home</title>
    </head>
    <body>
        <h1>Welcome <?php echo $username;?></h1>
        <a href="userProjector.php">Pojector</a>
        <a href="userSeminarHall.php">SeminarHall</a>
        <a href="php/ulogout.php">Logout</a>
    </body>
</html>