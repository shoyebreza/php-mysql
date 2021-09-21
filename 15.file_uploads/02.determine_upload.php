<?php

        if(is_uploaded_file($_FILES['classnote']['temp_name']))
        {
        copy($_FILES['classnote']['temp_name'],"www/htdocs/classnotes".$_FILES['classnote']['name']);
        }else{
            echo "<p>potential abus detected</p>";
        }

?>