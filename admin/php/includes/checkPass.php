<?php
    include "sessionUtils.php";
    $password = $_POST['password'];
    $pass = new sessionUtils();
    $resut = $pass->checkPassword($password);
    if ($resut){

    }else{

    }