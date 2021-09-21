<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subnet convert</title>
</head>
<body>
    <form action="listing16.php" method="post">
        <p>
            IP address: <br>
            <input type="text" name="ip[]" size="3" maxlength="3" value="" id=""/>
            <input type="text" name="ip[]" size="3" maxlength="3" value="" id=""/>
            <input type="text" name="ip[]" size="3" maxlength="3" value="" id=""/>
            <input type="text" name="ip[]" size="3" maxlength="3" value="" id=""/>
        </p>
        <p>
            subnet mask : <br>
            <input type="text" name="sm[]" size="3" maxlength="3" value="" id=""/>
            <input type="text" name="sm[]" size="3" maxlength="3" value="" id=""/>
            <input type="text" name="sm[]" size="3" maxlength="3" value="" id=""/>
            <input type="text" name="sm[]" size="3" maxlength="3" value="" id=""/>
        </p>
        <input type="submit" name="subnit" value="calculate">
    </form>
</body>
</html>