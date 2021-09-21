<?php
        $db = new mysqli("localhost","root","","todo");
    $id = md5(uniqid(rand(), 1 ));
    $address = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $stmt = $db->prepare("UPDATE logins SET hash=? WHERE email=?");
    $stmt->bind_param('ss', $id, $address);
    $stmt->execute();

    $email = <<< email
    dear user,
    click on the flowing link to reset your password:
    http://www.example.com/user/lostpassword.php?id=$id
    email;

    mail($address,"password recovery","$email","from:services@example.com");
    echo "<p>instruction regerding reseting your password hasbeen send to your $address</p>";

?>