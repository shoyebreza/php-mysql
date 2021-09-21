<?php

        $drive = "D:";

        $gb = round(disk_free_space($drive)/(1024*1024*1024));
        printf($gb."GB");
?>