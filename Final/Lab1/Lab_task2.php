<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task 2</title>
</head>
<body>
    <?php
    $temperature = 35;
    if(!is_numeric($temperature)){
        echo "Error!!! Temperature must be a number<br>";
    } else{
        if($temperature < 10){
            echo "It's cold!!<br>";
        } elseif($temperature >= 10 && $temperature < 25){
            echo "It's warm<br>";
        } elseif($temperature > 25){
            echo "It's hot!<br>";
        }
        echo "<br><br>";
    }

    $day = 7;
    if(!is_int($day) || $day<1 || $day>7){
        echo "Error: Day must be an integer between 1 and 7 <br>";
    } else{
        switch($day){
            case 1:
                echo "Monday <br>";
                break;
            case 2:
                echo "Tuesday <br>";
                break;
            case 3:
                echo "Wednesday <br>";
                break;
            case 4:
                echo "Thursday <br>";
                break;
            case 5:
                echo "Friday <br>";
                break;
            case 6:
                echo "Saturday <br>";
                break;
            case 7:
                echo "Sunday <br>";
                break;
        }
    }
    ?>
    
</body>
</html>