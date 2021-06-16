<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegEx</title>
</head>
<body>
    <h1>RegEx Syntax</h1>
    <pre>$exp = "/w3schools/i";</pre>
    <?php
        $exp = "/w3schools/i";
    ?>
    <br>

    <h1>preg_match()</h1>
    <?php
        $str = "Visit W3Schools";
        $pattern = "/w3schools/i";
        echo preg_match($pattern, $str); // Outputs 1
    ?>
    <br>

    <h1>preg_match_all()</h1>
    <?php
        $str = "The rain in SPAIN falls mainly on the plains.";
        $pattern = "/ain/i";
        echo preg_match_all($pattern, $str); // Outputs 4
    ?>
    <br>

    <h1>preg_replace()</h1>
    <?php
        $str = "Visit Microsoft!";
        $pattern = "/microsoft/i";
        echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
    ?>
    <br>

    <h1>Grouping</h1>
    <?php
        $str = "Apples and bananas.";
        $pattern = "/ba(na){2}/i";
        echo preg_match($pattern, $str); // Outputs 1
    ?>
    <br>
</body>
</html>