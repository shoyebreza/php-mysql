<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multi value</title>
</head>
<body>
    <?php
        function retriveuser()
        {
            $user[] = "json";

            $user[] = "jilmore";

            $user[] = "jsongilmore@gmail.com";

            $user[] = "english";

            return $user;
        }

        list($nickname, $username, $email, $language) = retriveuser();

        echo "name : {$nickname} ,<br> username : {$username},<br> email : {$email},<br> language : {$language}";
    
    ?>
</body>
</html>