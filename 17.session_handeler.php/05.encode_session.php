<?php

        session_start();
        $_SESSION['username'] = 'shoyebreza';
        $_SESSION['logedin'] = date("M d Y H:i:s");
        $sessionvers = session_encode();

        echo $sessionvers;

?>