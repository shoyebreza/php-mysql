<?php

            session_start();

            $_SESSION['username'] = "reza";
            printf("your username is: %s.", $_SESSION['username'] );

            unset($_SESSION['username']);
            printf("now  username set to: %s.", $_SESSION['username'] );

?>