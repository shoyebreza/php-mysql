<?php
        class MyException extends Exception {

            function __construct($language,$errorcode)
            {
                $this->language = $language;
                $this->errorcode = $errorcode;
            }

            function GetmessageMap()
            {
                $errors = file("errors/ {$this->language}.txt");

                foreach ($errors as $err ){
                    list($key,$value) = explode(",",$err,2);
                    $errorArray[$key] = $value;
                }

                return $errorArray[$this->errorcode];
            }
        }

        try{
            throw new MyException("english", 4);
        }
        catch (MyException $e) {
            echo $e->getMessageMap();
        }

?>