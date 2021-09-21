<?php

    $file = "log.txt";
    printf("file last change time : %s", date("m-d-y  g:i:sa", filectime($file)));

?>