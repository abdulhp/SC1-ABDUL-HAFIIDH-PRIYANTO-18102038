<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators</title>
</head>
<body>
    <h1>PHP Arithmetic Operators</h1>
    <?php
        $x = 5;
        $y = 10;
        echo $x + $y;
        echo "<br>";
        echo $x - $y;
        echo "<br>";
        echo $x * $y;
        echo "<br>";
        echo $x / $y;
        echo "<br>";
        echo $x % $y;
        echo "<br>";
        echo $x ** $y;
        echo "<br>";
    ?>
    <br>

    <h1>PHP Assignment Operators</h1>
    <?php
        $x1 = $x;
        $y1 = $y;
        echo $x1 += $y1;
        echo "<br>";
        echo $x1 -= $y1;
        echo "<br>";
        echo $x1 *= $y1;
        echo "<br>";
        echo $x1 /= $y1;
        echo "<br>";
        echo $x1 %= $y1;
        echo "<br>";
    ?>
    <br>

    <h1>PHP Comparison Operators</h1>
    <?php
        echo $x == $y;
        echo "<br>";
        echo $x === $y;
        echo "<br>";
        echo $x != $y;
        echo "<br>";
        echo $x <> $y;
        echo "<br>";
        echo $x !== $y;
        echo "<br>";
        echo $x > $y;
        echo "<br>";
        echo $x < $y;echo "<br>";
        echo $x >= $y;echo "<br>";
        echo $x <= $y;echo "<br>";
        echo $x <=> $y;echo "<br>";
    ?>
    <br>

    <h1>PHP Increment / Decrement Operators</h1>
    <?php
        echo ++$x;echo "<br>";
        echo $x++;echo "<br>";
        echo --$x;echo "<br>";
        echo $x--;echo "<br>";
    ?>
    <br>

    <h1>PHP Logical Operators</h1>
    <?php
        echo $x and $y;echo "<br>";
        echo $x or $y;echo "<br>";
        echo $x xor $y;echo "<br>";
        echo $x && $y;echo "<br>";
        echo $x || $y;echo "<br>";
        echo !($x and $y);echo "<br>";
    ?>
    <br>

    <h1>PHP String Operators</h1>
    <?php
        $txt1 = "Aku";
        $txt2 = "Kamu";
        echo $txt1 . $txt2;echo "<br>";
        echo $txt2 .= $txt1;echo "<br>";
    ?>
    <br>

    <H1>PHP Array Operators</H1>
    <?php
        $cars = ["Toyota", "Volvo"];
        $motors = ["Honda", "Suzuki", "Yamaha"];

        var_dump($cars + $motors);echo "<br>";
        echo $cars == $motors;echo "<br>";
        echo $cars === $motors;echo "<br>";
        echo $cars != $motors;echo "<br>";
        echo $cars <> $motors;echo "<br>";
        echo $cars !== $motors;echo "<br>";
    ?>
    <br>

    <h1>PHP Conditional Assignment Operators</h1>
    <?php
        echo $x > $y ? $x : $y;echo "<br>";
        echo $x ?? $y;echo "<br>";
    ?>
</body>
</html>