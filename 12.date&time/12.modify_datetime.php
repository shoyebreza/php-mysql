<?php

        $date = new DateTime("May 25,2021 00:33");
        $date->modify("+27 hours");
        echo $date->format("Y-m-d h:i:s");


?>