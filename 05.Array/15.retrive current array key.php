<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>retrive the current array key</title>
</head>
<body>
    <?php
    $capitals = array("ohio"=>"columbus","Iowa"=>"desmonis","dhaka"=>"bangladesh");

    echo "<p>can you  name the capitals of the states?</p>";

    while($key= key($capitals))
    {
        printf("%s <br/> ", $key);

        next($capitals);
    }
    
    
    ?>
</body>
</html>