<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adding value front of array</title>
</head>
<body>
    <?php 
    
            $states = array("ohio","newyork");

            array_unshift($states,"california","texas");

            print_r($states);
    
    
    ?>
</body>
</html>