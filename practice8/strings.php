<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strings</title>
</head>
<body>
    <h1>strlen</h1>
    <?php
        echo strlen("Hello world!");
    ?>
    <br>

    <h1>str_word_count</h1>
    <?php
        echo str_word_count("Hello world!");
    ?>
    <br>

    <h1>strrev</h1>
    <?php
        echo strrev("Hello world!");
    ?>
    <br>

    <h1>strpos</h1>
    <?php
        echo strpos("Hello world!", "world");
    ?>
    <br>

    <h1>str_replace</h1>
    <?php
        echo str_replace("world", "Dolly", "Hello world!");
    ?>
    <br>

    
</body>
</html>