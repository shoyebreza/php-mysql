<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search database</title>
</head>
<body>
    <p>
        <form action="" method="post">

        last name : <br>
        <input type="text" name="name" size="20" maxlength="40" value=""> <br>
        <input type="submit" value="search">
        </form>
    </p>
</body>
</html>

<?php
        if(isset($_POST['name']))
        {
            $db = new mysqli('localhost','root','','todo');
            $stmt = $db->prepare('select name,email,phone,city from crud where name like ?');
            $stmt->bind_param('s', $_POST['name']);
            $stmt->execute();
            $stmt->store_result();

            if($stmt->num_rows() > 0 )
            {
                $stmt->bind_result($name,$email,$phone,$city);
                while($stmt->fetch())

                printf("%s, %s, %s(%s)</br>", $name,$email,$phone,$city );
            }else{
                echo "no result found";
            }
        }


?>