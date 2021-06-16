<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>
    <h1>Create a User Defined Function in PHP</h1>
    <?php
        function writeMsg() {
            echo "Hello world!";
        }

        writeMsg();
    ?>
    <br>

    <h1>PHP Function Arguments</h1>
    <?php
        function familyName($fname) {
            echo "$fname Refsnes.<br>";
        }

        familyName("Jani");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai Jim");
        familyName("Borge");
    ?>
    <br>

    <h1>PHP Strict Declared Function</h1>
    <?php
        function addNumbers(int $a, int $b) {
            return $a + $b;
        }
        echo addNumbers(5, "5 Days");
    ?>
    <br>

    <h1>PHP Default Argument Value</h1>
    <?php
        function setHeight(int $minHeight = 50) {
            echo "The height is : $minHeight <br>";
        }

        setHeight(350);
        setHeight();
    ?>
    <br>

    <h1>PHP Function - Returning Values</h1>
    <?php
        function sum(int $a, int $b) {
            $c = $a + $b;
            return $c;
        }

        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "7 + 13 = " . sum(7, 13) . "<br>";
        echo "2 + 4 = " . sum(2, 4);
    ?>
    <br>

    <h1>PHP Return Type Declarations</h1>
    <?php
        function addNumbers2(float $a, float $b) : float{
            return $a + $b;
        }

        echo addNumbers2(1.2, 5.2);
    ?>
    <br>

    <h1>Passing Argument by Reference</h1>
    <?php
    function add_five(&$value) {
        $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num;
    ?>
    <br>

</body>
</html>