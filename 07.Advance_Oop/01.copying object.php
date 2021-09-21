<?php

    class employee
    {
        private $name;
        function setname($name){
            $this->name = $name;
        }

        function getname(){
            return $this->name;
        }
    }

    $emp1 = new employee();
    $emp1->setname('jabir ibna haiiyan');

?>