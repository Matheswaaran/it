<?php

    class sessionUtils{
        function __construct(){
            session_start();
        }

        public function UserLogin($id,$username){
            $_SESSION['user_id'] = $id;
            $_SESSION['user_username'] = $username;
        }

        public function Logout(){
            session_destroy();
            return true;
        }
    }