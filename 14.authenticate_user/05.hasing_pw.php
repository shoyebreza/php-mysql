<?php

        $pass = '112233';
       $make =  password_hash($pass, PASSWORD_DEFAULT); 
        echo $make;

?>