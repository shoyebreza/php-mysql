<?php

            $domain = "www.example.com";
            $recordexit = checkdnsrr($domain,"ANY");

            if($recordexit)
            echo "the domain '$domain' has a dns record";
            else
            echo "the domain '$domain' not apear the domain record";

?>