<?php
        $length = 12;
        $valid = 'aljf2r0587jlskjdfogj095kljh462k';
        $max = strlen($valid);
        $db = new mysqli("localhost","root","","todo");
        for($i = 0; $i < $length; $i++)
        {
            $paswd .= $valid[random_int(0,$max)]; 
        }

        $id = filter_var($_GET[$id], FILTER_SANITIZE_STRING);
        $stmt = $db->prepare("UPDATE logins SET pswd=? WHERE hash=?");
        $stmt->bind_param('ss',password_hash($paswd,PASSWORD_DEFAULT),$id);
        $stmt->execute();
        echo "<p>your pasword hasbeen reset to {$paswd}<p/>";

?>