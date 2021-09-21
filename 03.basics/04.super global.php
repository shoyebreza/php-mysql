<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>super globall</title>
</head>
<body>
    <?php 
        printf("your user  information is : %s",$_SERVER['HTTP_USER_AGENT'] );

        printf(" <br> your IP address is : %s", $_SERVER['REMOTE_ADDR']);

        
    
    ?>
</body>
</html>