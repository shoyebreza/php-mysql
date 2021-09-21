<?php

      define("FILEREPOSITORY","15.file_uploads");
      if($_FILES['classnote']['error'] == UPLOAD_ERR_OK)
        {
            if(is_uploaded_file($_FILES['classnote']['tmp_name']))
            {
                if($_FILES['classnote']['type'] = !"application/pdf")
                {
                        echo "<p>class note mustbe upoload in pdf </p>";
                }else{
                    $result = move_uploaded_file($_FILES['classnote']['tmp_name'],$_POST['lastname'] .'_'.$_FILES['classnote']['name']);
                    if($result == 1) 
                    echo "<p>file successfully uploaded </p>";
                    else echo "<p>there was a problem uploading</p>";
                }

            }
        }
        else{
            echo "<p> there was a problem uploading . error code 
            {$_FILES['classnote']['error']}</p>";
        }  

?>