<?php
// if session is not started
session_start();

// store our current session
$my_sess = $_SESSION;

// decode $data (the encoded session data, either from a file or database). Remember, decoded data is put directly into $_SESSION
session_decode($data);
$data = $_SESSION;

print_r($data);

// restore our own session
$_SESSION = $my_sess;

?>