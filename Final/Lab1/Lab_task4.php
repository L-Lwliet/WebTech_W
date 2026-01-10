<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task 4</title>
</head>
<body>
    <?php
    function sum($a, $b){
        return $a + $b;
    }

    echo sum(10, 5) . "<br>";
    echo sum(20.2, 30.3) . "<br>";

    function factorial($n){
        if($n<=1){
            return 1;
        } else{
            return $n * factorial($n-1);
        }
    }

    echo factorial(0). "<br>";
    echo factorial(1). "<br>";
    echo factorial(4). "<br>";
    echo factorial(5). "<br>";

    
    function is_prime($n){
        $c = 0;
        if($n<=2){
            echo $n . " is not a prime a number<br>";
        } else{
            for($i = 2; $i<=$n; $i++){
                if($n%$i == 0){
                    $c++;
                }
            }
            if($c>=2){
                echo $n . " is not a prime number<br>";
            } else{
                echo $n . " is a prime number<br>";
            }
        }
    }

    is_prime(5);
    is_prime(12);
    is_prime(115);

    ?>
    
</body>
</html>