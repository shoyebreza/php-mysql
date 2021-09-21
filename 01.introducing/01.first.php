<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first php script </title>
    <style>
        div{
        background-color: aquamarine;
        color: pink;
        }

        body{
            font-size: 18px;
        }
    </style>
</head>
<body>
    <?php
     $date = Date("F j , Y");
     $date2 = Date("m/d/y");
    echo "hello md.shoyeb <br> today is : .$date.<br> other formate is : $date2";
    
    ?>
</body>
</html>