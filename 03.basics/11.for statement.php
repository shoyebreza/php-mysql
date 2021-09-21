<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for ststement</title>
</head>
<body>
    <?php
    
        define('KILOMETER_TO_MILE',0.62140);

        for($kilometer = 1; $kilometer <=10 ; $kilometer++)
            {
                printf('%d kilometers = %f miles <br>', $kilometer, $kilometer*constant('KILOMETER_TO_MILE'));
            }
    ?>
</body>
</html>