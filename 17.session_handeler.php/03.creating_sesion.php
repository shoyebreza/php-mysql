<?php

            session_start();

            $_SESSION['user'] = "reza";
            printf("your user name is %s.", $_SESSION['user'] );


?>