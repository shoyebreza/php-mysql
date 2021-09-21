<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>retrive array value</title>
</head>
<body>
            
<?php
    $array = array("size" => "XL", "color" => "gold");
    print_r(array_values($array));
?>

</body>
</html>