<?php

    class me {
        private $name;
        private $title;

        function setMyname($name){
            $this->name = $name;
        }

        function getMyname(){
            return $this->name;
        }


        function setTitle($title){
            $this->title = $title;
        }

        function getTitle(){
            return $this->title;
        }
    }

    $about = new me();

    $about->setMyname("md.shoyeb");
    $mytitle = clone $about;
    $mytitle->setTitle("Mister ");
    printf($mytitle->getTitle());
    printf($about->getMyname());

?>