<?php

        $secret = 'g3rw6ertg36546454g34634tg34y6we';
        if(($_SERVER['PHP_AUTH_USER'] != 'client') || (hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret))
        {
            header('www-authenticate: basic realm= "secret stash"');
            header("TTP/1.1 401 unauthorized");
            print('you must provide proper crediential');
            exit;
        }
        
         


?>