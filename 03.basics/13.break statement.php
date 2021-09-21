<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break statement</title>
</head>
<body>
    <?php
        $primes = array(2,3,4,5,7,8,9,11,13,15,17,19,21,23,25,27,29,31,33,35,37,39,41,43,45,47);

        for($count = 1; $count++ ; $count < 1000)
        {
            $random = rand(1,50);

            if(in_array($random,$primes))
            {
                printf("prime number found %d <br> &#128514;",$random);
                break;
            }else{
                printf("non prime number found : %d <br/> &#128524;", $random);
            }
        }
    
    ?>
</body>
</html>