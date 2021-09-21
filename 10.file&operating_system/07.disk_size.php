<?php
        $disk = "D:";
        $size =round( disk_total_space($disk)/(1024*1024*1024));

        printf($size."GB");

?>