<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passing argument value</title>
</head>
<body>
    <?php
        $price = 15;
        $tax = .0675;

        $total = calculateSalesTax($price,$tax);


        function calculateSalesTax($price, $tax)
        {
            return $price +($price * $tax);

            
        }

        echo "calculateSalesTax()";
    
    ?>
</body>
</html>