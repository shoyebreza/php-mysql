<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>elseif statement</title>
</head>
<body>
    <?php
    $secret = 344;

    $_POST['guess'] = 444;

    if( $_POST['guess'] == $secret)
    {
        echo "congratulation";
    }elseif(abs ($_POST['guess'] - $secret) < 10)
    {
        echo "your getting clouser ";
    }else{
        echo "sorry";
    }
    
    ?>
</body>
</html>