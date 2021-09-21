
<?php
$ip = "192.168.1.01";
if(! filter_var($ip, FILTER_VALIDATE_IP))
{
    echo "please provide valid ip";
}
?>
