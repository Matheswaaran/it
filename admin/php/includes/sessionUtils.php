<?php
    class sessionUtils{
        function __construct(){
            session_start();
        }

        public function AdminLogin($id,$username){
            $_SESSION['admin_id'] = $id;
            $_SESSION['admin_username'] = $username;
        }

        public function Logout(){
            session_destroy();
            return true;
        }
    }