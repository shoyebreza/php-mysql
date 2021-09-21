<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch </title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="case" >
</form>
    <?php
    $category = $_POST['case'];
    switch($category)
        {
            case "news":
                echo "what happening around the world";
                break;

            case "weather":
                echo "your weekly forecast";
                break;

            case "sport":
                echo "latest sport hilight";
                break;
            default:
            echo "wellcome to my website ";
        }    
    ?>
</body>
</html>