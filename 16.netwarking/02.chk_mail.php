
<?php

        $email = "ceo@example.com";
        $domain= explode("@", $email);
        $valid = checkdnsrr($domain[1], "ANY");
        if($valid)
             echo "the domain has an  mx record";
        else
            echo "the domain cannot locate mx record";

?>