<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>
    <h1>count() Function</h1>
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo count($cars);
    ?>
    <br>

    <h1>PHP Indexed Array</h1>
    <?php
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
    <br>

    <h1>Loop through an Indexed Array</h1>
    <?php
        $arrLength = count($cars);

        for($x = 0; $x < $arrLengthl; $x++) {
            echo $cars[$x];
            echo "<br>";
        }
    ?>
    <br>

    <h1>PHP Associative Array</h1>
    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo "Peter is " . $age['Peter'] . " years old.";
    ?>
    <br>

    <h1>Loop through an Associative Array</h1>
    <?php
        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
    ?>
    <br>

    <h1>Two-Dimensional Array</h1>
    <?php
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
          );

          echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
          echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
          echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
          echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
    ?>
    <br>

    <h1>Loop through Two-Dimensional Array</h1>
    <?php
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }
    ?>
    <br>

    <h1>Sort Array Ascending - sort()</h1>
    <?php
        var_dump($cars);
        sort($cars);
        var_dump($cars);
    ?>
    <br>

    <h1>Sort Array Descending - rsort()</h1>
    <?php
        var_dump($cars);
        rsort($cars);
        var_dump($cars);
    ?>
    <br>

    <h1>Sort Array Ascending According to Value - asort()</h1>
    <?php
        var_dump($age);
        asort($age);
        var_dump($age);
    ?>
    <br>

    <h1>Sort Array Ascending According to Key - ksort()</h1>
    <?php
        var_dump($age);
        ksort($age);
        var_dump($age);
    ?>
    <br>

    <h1>Sort Array Descending According to Value - asort()</h1>
    <?php
        var_dump($age);
        arsort($age);
        var_dump($age);
    ?>
    <br>

    <h1>Sort Array Descending According to Key - ksort()</h1>
    <?php
        var_dump($age);
        krsort($age);
        var_dump($age);
    ?>
    <br>
</body>
</html>