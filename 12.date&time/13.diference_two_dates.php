<?php

        $terminate = new DateTime("2021-12-28");

        $today = new DateTime();

        $span = $terminate->diff($today);

        echo "your date ends in {$span->format('%a')} days !";


?>