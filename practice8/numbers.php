<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Numbers</title>
</head>
<body>
    <h1>PHP Integers</h1>
    <?php
        $x = 5985;
        var_dump(is_int($x));

        $x1 = 59.85;
        var_dump(is_int($x1));
    ?>
    <br>

    <h1>PHP Float</h1>
    <?php
        $x2 = 10.365;
        var_dump(is_float($x2));
    ?>
    <br>

    <h1>PHP Infinity</h1>
    <?php
        $x3 = 1.9e411;
        var_dump($x3);
    ?>
    <br>

    <h1>PHP NaN</h1>
    <?php
        $x4 = acos(8);
        var_dump($x);
    ?>
    <br>

    <h1>PHP Numerical Strings</h1>
    <?php
        $x5 = 5985;
        var_dump(is_numeric($x5));

        $x5 = "5985";
        var_dump(is_numeric($x5));

        $x5 = "59.85" + 100;
        var_dump(is_numeric($x5));

        $x5 = "Hello";
        var_dump(is_numeric($x5));
    ?>
    <br>

    <h1>PHP Casting Strings and Floats to Integers</h1>
    <?php
        $x6 = 23465.768;
        $int_cast = (int)$x6;
        echo $int_cast;

        echo "<br>";

        $x7 = "23465.768";
        $int_cast = (int)$x7;
        echo $int_cast;
    ?>
</body>
</html>