<?php



class employee
{
    protected $name;
    protected $title;

    function __construct()
    {
        echo "employee construct called ";
    }


}

class manager extends employee
{
    function __construct()
    {
       parent::__construct();
       echo "manager constructor called !!"; 
    }
}

    $employee = new manager();


?>