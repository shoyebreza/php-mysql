<?php
        $user = "name : <b>shoyeb </b> <br> title : <b>php guru </b> ";
        preg_match_all("/<b>(.*)<\/b>/U", $user, $pat_array );
        printf("%s </br> %s", $pat_array[0][0], $pat_array[0][1]);
?>