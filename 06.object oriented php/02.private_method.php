<?php

class book
{
    private $title;
    private $isbn;
    private $copies;

    function __construct($isbn)
    {
      $this->setIsbn($isbn);  
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }
}

$book = new book("0615303889");

?>