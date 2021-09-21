<?php

    try{
       $fh = fopen("contact.txt", "r");
       if(!$fh){
           throw new exception("could not open the file");
       } 
    }catch(Exception $e){
        echo "error (file: ".$e->getfile().",line".$e->getLine()."): ".$e->getMessage();
    }finally {
        fclose($fh);
    }


?>