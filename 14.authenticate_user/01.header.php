<?php
/* This will give an error. Note the output
 * above, which is before the header() call */
header('Location: http://www.example.com/');
//header("HTTP/1.1 404 Not Found");
exit;
?>