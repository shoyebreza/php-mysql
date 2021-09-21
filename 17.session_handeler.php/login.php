<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        username: <br> <input type="text" name="username" id="" size="10"> <br>
        password: <br> <input type="password" name="pswd" id="" size="10"> <br>
        <input type="submit" value="login" >
    </form>
</body>
</html>

<?php
        session_start();

        if(! isset($_SESSION['username']))
        {
            if(isset($_POST['username']))
            {
                $db = new mysqli("localhost","root","","todo");
                $stmt = $db->prepare("SELECT fname FROM users WHERE username=? and password=?");
                $stmt->bind_param('ss', $_POST['username'], $_POST['password']);
                $stmt->execute();
                $stmt->store_result();
                if($stmt->num_rows() == 1)
                {
                    $stmt->bind_result($fname);
                    $stmt->fetch();
                    $_SESSION['fname'] = $fname;
                    header("location: localhost");
                }
            }else{
                require_once('login.php');
            }
        }else{
            echo "you are loged in to the site";
        }


?>