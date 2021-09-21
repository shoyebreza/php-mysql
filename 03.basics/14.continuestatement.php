<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>continue state</title>
</head>
<body>
    <?php
        $username = array("grace","Doris","gary","nate","missing","tom");

        for($x= 0; $x < count($username); $x++)
        {
            if($username[$x] == "missing") continue;

            printf("staff member : %s <br>", $username[$x]);
        }
    
    
    ?>
</body>
</html>