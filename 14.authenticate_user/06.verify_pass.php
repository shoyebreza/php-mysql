
<?php
$name = 'rasmuslerdorf';
$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';

if (password_verify($name, $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>
