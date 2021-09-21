<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while statement</title>
</head>
<body>
    <?php
    $count= 1;
    while($count < 11)
    {
        printf('%d squred = %d <br>',$count, pow($count,2));

        $count++;
    }
    
    ?>
</body>
</html>