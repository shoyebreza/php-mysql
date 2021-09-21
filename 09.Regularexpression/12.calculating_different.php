<?php
$password = "a123456";
if(strcspn($password, "123456677") == 0 )
{
    echo "password cannot consist";
}

?>