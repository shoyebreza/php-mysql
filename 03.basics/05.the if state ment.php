<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if ststement</title>
</head>
<body>
    <form action="">
        <input type="number" name="guess" id="">
        <button type="submit">submit</button>
    </form>
    <?php 
    $secret = 455;

    if($_POST['guess'] == $secret)
    {
        echo "congratulation";
    }
    
    ?>
</body>
</html>