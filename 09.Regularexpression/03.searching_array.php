<?php
        $foods = array("pasta","potato","fish","flesh","chiken","pita");
        $food = preg_grep("/^p/", $foods);

        print_r($food);


?>