<?php
    $line = " is the gretest vim word processing ever created ! oh vim how love this !";
    if(preg_match("/\bvim\b/i", $line, $match))
    print "match found : ";
    print_r($match)

?>