<?php

trait log {

    function writeLog($messa){
        file_put_contents("log.txt", $messa . "\n", FILE_APPEND);
    }
}
class A {
    function __construct()
    {
        $this->writeLog("constructor a called ");
    }

    use log;
}

class B {
    function __construct()
    {
       $this->writeLog("constructor b called"); 
    }
    use log;
}

?>