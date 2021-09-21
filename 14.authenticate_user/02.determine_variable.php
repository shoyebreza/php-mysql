<?php

        if(! isset($_SERVER['PHP_AUTH_USER']) || ! isset($_SERVER['PHP_AUTH_PW']))
        {

            header('www-authenticate: basic realm="authentication"');
            header("TTP/1.1 401 unauthorized");
        }else{
            echo "your supplied user name :{$_SERVER['PHP_AUTH_USER']}<br/>";
            echo "your pasword : {$_SERVER['PHP_AUTH_PW']}<br/>";
        }


?>