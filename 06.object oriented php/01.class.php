<?php

class employee{
    private $name;
    private $title;
    
    public function setName($name)
    {
             $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sayHello()
    {
        echo "hi, my name is {$this->getName}.";
    }
}

?>