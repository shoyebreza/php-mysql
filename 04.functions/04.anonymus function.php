<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anonymus function</title>
</head>
<body>
        <?php
                function myecho()
                {
                    echo "closure";
                };
                $example = "myecho";

                $example();
        
        ?>
</body>
</html>