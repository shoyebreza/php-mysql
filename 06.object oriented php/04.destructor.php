<?php

    class book
    {
        private $title;
        private $isbn;
        private $copies;

        function __construct($isbn)
        {
          echo "book class instance created !";  
        }

        function __destruct()
        {
            echo "book class instance destroyed!";
        }
    }

    $book = new book("9805245205");

?>