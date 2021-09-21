<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>counting array value freequency</title>
</head>
<body>
    
<?php
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
?>


<?php

$list = [
  ['id' => 1, 'userId' => 5],
  ['id' => 2, 'userId' => 5],
  ['id' => 3, 'userId' => 6],
];
$userId = 5;

echo array_count_values(array_column($list, 'userId'))[$userId]; // outputs: 2
?>

</body>
</html>