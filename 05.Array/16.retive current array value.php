<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>retrive current array value </title>
</head>
<body>
    <?php
    
    $capitals = array("ohio"=>"columbus","Iowa"=>"desmonis","dhaka"=>"bangladesh");

    echo "<p>can you  name the state of the capitals?</p>";

    while($capital= current($capitals))
    {
        printf("%s <br/> ", $capital);

        next($capitals);
    }
    
    
    ?>
</body>
</html>