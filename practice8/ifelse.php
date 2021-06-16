<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP If...else...elseif</title>
</head>
<body>
    <h1>PHP The if statement</h1>
    <?php
        $t = date("H");

        if ($t < "20") {
            echo "Have a good day!";
        }
    ?>
    <br>

    <h1>PHP The if...else</h1>
    <?php
        $t = date("H");

        if ($t < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }
    ?>
    <br>

    <h1>PHP The if...elseif...else</h1>
    <?php
        $t = date("H");

        if ($t < "10") {
            echo "Have a good morning!";
        } elseif ($t < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }
    ?>
</body>
</html>