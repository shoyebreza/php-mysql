<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>extracting array with list </title>
</head>
<body>
    <?php
    
        $users = file("users.txt");

        foreach($users as $user)
        {
            list($name, $occupation, $color) = explode("|",$user);

            printf("Name : %s <br>",$name);

            printf("occupation : %s <br>",$occupation);

            printf("color : %s ",$color);
        }
    
    ?>
</body>
</html>