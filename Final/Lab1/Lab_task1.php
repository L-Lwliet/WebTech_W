<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task 1</title>
</head>
<body>
    <?php
    $Name = "Tawfique Ahmed Samrat";  //String
    $age = 22; //Integer
    $cgpa = 3.35; //float
    $isEmployed = false; //boolean

    // Output the variables to demonstrate
    echo "Name: " . $Name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Height: " . $cgpa . "<br>";
    echo "Is Employed: " . ($isEmployed ? "Yes" : "No") . "<br><br>";

    //Integer
    $a = 10;
    $b = 4;
    $c = $a + $b;
    $d = $a - $b;
    $e = $a * $b;
    $f = $a / $b;

    echo "Addition of " . $a . " and " . $b . " is " . $c . "<br>";
    echo "Subtraction of " . $b . " from " . $a . " is " . $d . "<br>";
    echo "Multiplication of " . $a . " and " . $b . " is " . $e . "<br>";
    echo "Division of " . $a . " by " . $b . " is " . $f . "<br>";
    
    //Float
    $x1 = 12.23;
    $x2 = 2.3;
    $x_a = $x1 + $x2;
    $x_s = $x1 - $x2;
    $x_m = $x1 * $x2;
    $x_d = $x1 / $x2;

    echo "<br><br>Addition of " . $x1 . " and " . $x2 . " is " . $x_a . "<br>";
    echo "Subtraction of " . $x2 . " from " . $x1 . " is " . $x_s . "<br>";
    echo "Multiplication of " . $x1 . " and " . $x2 . " is " . $x_m . "<br>";
    echo "Division of " . $x1 . " by " . $x2 . " is " . $x_d . "<br>";

    echo "<br><br>Sum of " . $x1 . " and " . $a . " is ". $x1 + $a . " (using echo)<br>";
    print "Sum of " . $x1 . " and " . $a . " is ". $x1 + $a . " (using print)<br>";

    echo "<br><br>Variable details using var_dump()<br>";
        var_dump($Name);
        echo "<br>";
        var_dump($age);
        echo "<br>";
        var_dump($cgpa);
        echo "<br>";
        var_dump($isEmployed);
    echo "<br>";

    ?>  
</body>
</html>

