<?php

    $file = "log.txt";
    printf("file last access time : %s", date("m-d-y  g:i:sa", fileatime($file)));

?>