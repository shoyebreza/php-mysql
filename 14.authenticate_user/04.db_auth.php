<?php

        function authenticate_user() {
            header('www-authenticate: basic realm= "secret stash"');
            header("TTP/1.1 401 unauthorized");
            exit;
        }


        if( ! isset($_SERVER['PHP_AUTH_USER'])){
            authenticate_user();
        }else{
            $db = new mysqli("localhost","root","","todo");
            $stmt = $db->prepare("SELECT name, pasword FROM login WHERE name=? AND pasword=?");

            $stmt->bind_param('ss', $_SERVER['PHP_AUTH_USER'], password_hash($_SERVER['PHP_AUTH_PW'],PASSWORD_DEFAULT));

            $stmt->execute();
            $stmt->store_result();
            if($stmt->num_rows() == 0)
            authenticate_user();
        }


?>