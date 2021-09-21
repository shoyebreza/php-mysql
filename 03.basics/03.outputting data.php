<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output data to client</title>
</head>
<body>
    <?php
        $title = "<h1>this is the title head lines  </h1>";

        $body = "<p>this is the content of the pragraph </p>";
    echo $title, $body;

    printf("printf : %d bottle of tonic water.",100);
    

    $cost = sprintf("$%.2f", 43.2);

    echo $cost;
    ?>
</body>
</html>