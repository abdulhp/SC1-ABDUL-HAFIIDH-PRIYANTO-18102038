<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Math</title>
</head>
<body>
    <h1>pi() Function</h1>
    <?php
        echo(pi());
    ?>
    <br>

    <h1>min() and max() Function</h1>
    <?php
        echo(min(0, 150, 30, 20, -8, -200));
        echo(max(0, 150, 30, 20, -8, -200));
    ?>
    <br>

    <h1>abs() Function</h1>
    <?php
        echo(abs(-6.7));
    ?>
    <br>

    <h1>sqrt() Function</h1>
    <?php
        echo(sqrt(64));
    ?>
    <br>

    <h1>round() Function</h1>
    <?php
        echo(round(0.60));
        echo(round(0.49));
    ?>
    <br>

    <h1>rand() Function</h1>
    <?php
        echo(rand());
        echo(rand(10, 100));
    ?>
    <br>
</body>
</html>