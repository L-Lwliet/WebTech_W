<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task 3</title>
</head>
<body>
    <?php
    echo "Numbers from 1 to 20: <br>";
    for($i = 1; $i<=20; $i++){
        echo $i . " ";
    }

    echo "<br><br>";

    $j = 1;
    echo "Even numbers using while loop: <br>";
    while($j<=20){
        if($j%2 == 0){
            echo $j . " ";
        }     
        $j++;   
    }

    echo "<br><br>";

    $fruits = ["apple" => "red", "banana" => "yellow", "orange" => "orange"];
    foreach ($fruits as $key => $value){
        echo "Fruit name: " . $key . " and color: " . $value . "<br>";
    }

    echo "<br><br>";
    echo "Numbers from 1 to 20(breaks after the first 5 numbers): <br>";
    for($i = 1; $i<=20; $i++){
        echo $i . " ";
        if($i>=5){
            break;
        }
    }

    ?>
</body>
</html>