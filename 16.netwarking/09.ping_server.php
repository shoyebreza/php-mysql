<?php
        $server = "www.example.com";
        $count = 3;
        echo "<pre>";
        system("ping -c {$count} {$server}");
        echo "</pre>";


?>