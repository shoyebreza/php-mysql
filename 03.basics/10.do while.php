<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do ... while statement</title>
</head>
<body>
    <?php
        $count = 11;
        do{
            printf("%d squred = %d <br>", $count, pow($count,2));
        }while($count <10);
        
    
    ?>
</body>
</html>