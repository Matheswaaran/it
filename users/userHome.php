<?php
    include "php/includes/usession.php";
    $username = $_SESSION['user_username'];
    $uid = $_SESSION['user_id'];
    $session = new sessionUtils();
?>

<html>
    <head>
        <title>User Home</title>
    </head>
    <body>
        <h1>Welcome <?php echo $username;?></h1>
        <h1><?php echo $session->decryptIt($row['password']); ?></h1>
        <a href="userProjector.php">Pojector</a>
        <a href="userSeminarHall.php">SeminarHall</a>
        <a href="php/ulogout.php">Logout</a>
    </body>
</html>