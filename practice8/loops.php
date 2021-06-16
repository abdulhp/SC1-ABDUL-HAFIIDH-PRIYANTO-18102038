<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
</head>
<body>
    <h1>PHP While</h1>
    <?php
        $x = 1;
        while($x <= 5) {
            echo "The number is $x <br>";
            $x++;
        }
    ?>
    <br>

    <h1>PHP Do...While</h1>
    <?php
        $y = 1;
        do{
            echo "The number is $y <br>" ;
            $y++;
        }while($y <= 5);
    ?>
    <br>

    <h1>PHP For</h1>
    <?php
        for($i = 1; $i <= 5; $i++) {
            echo "The number is: $i <br>";
        }
    ?>
    <br>

    <h1>PHP Foreach</h1>
    <?php
        $colors = array("red", "green", "blue", "yellow");
        foreach($colors as $color) {
            echo "$color <br>";
        }
    ?>
    <br>

    <h1>PHP Break</h1>
    <?php
        for ($j = 0; $j < 10; $j++) {
            if ($j == 4) {
                break;
            }
            echo "The number is: $j <br>";
        }
    ?>
    <br>

    <h1>PHP Continue</h1>
    <?php
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
    }
    ?>
</body>
</html>