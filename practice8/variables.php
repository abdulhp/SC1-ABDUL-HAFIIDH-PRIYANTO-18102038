<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>
    <h1>Creating (Declaring) PHP Variables</h1>
    <?php
        $txt = "Hello world!";
        $x = 5;
        $y = 10.5;
    ?>

    <h1>Output Variables</h1>
    <?php
        $txt = "W3Schools.com";
        echo "I love $txt<br>";
        echo "I love " . $txt. "!<br>";

        $x = 5;
        $y = 4;
        echo $x + $y;
    ?>

    <h1>Global Variable</h1>
    <?php
        $x = 5; // Global Scope

        function myTestGlobal() {
            echo "<p>Variable x inside function is: $x</p>"; 
        }
        myTestGlobal();

        echo "<p>Variable x outside function is: $x</p>";
    ?>

    <h1>Global Variable</h1>
    <?php

        function myTestLocal() {
            $x1 = 5; // Local Scope
            echo "<p>Variable x inside function is: $x1</p>"; 
        }
        myTestLocal();

        echo "<p>Variable x outside function is: $x1</p>";
    ?>

    <h1>Global keyword</h1>
    <?php 
        $x2 = 5;
        $y2 = 10;

        function myTestGlobalKeyword() {
            global $x2, $y2;
            $y2 = $x2 + $y2;
        }

        myTestGlobalKeyword();
        echo $y2;
    ?>

    <h1>Static keyword</h1>
    <?php
        function myTestStaticKeyword() {
            static $x3 = 0;
            echo $x3;
            $x++;
        }

        myTestStaticKeyword();
        myTestStaticKeyword();
        myTestStaticKeyword();
    ?>
</body>
</html>