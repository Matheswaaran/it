<?php
    include "php/includes/asession.php";
    $username = $_SESSION['admin_username'];
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
