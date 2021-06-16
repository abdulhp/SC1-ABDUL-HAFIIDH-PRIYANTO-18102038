<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants</title>
</head>
<body>
    <h1>Constants</h1>
    <?php
        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;
    ?>
    <br>

    <h1>Constants with case-insensitive name</h1>
    <?php
        define("GREETING2", "Welcome to W3Schools.com!", true);
        echo greeting2;
    ?>
    <br>

    <h1>PHP Constant Arrays</h1>
    <?php
        define("cars", ["Alfa Romeo", "BMW", "Toyota"]);
        echo cars[0];
    ?>
    <br>
</body>
</html>