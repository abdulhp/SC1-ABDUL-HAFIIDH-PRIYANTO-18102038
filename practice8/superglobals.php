<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Global Variables - Superglobals</title>
</head>
<body>
    <h1>PHP Supergloblas are: </h1>
    <ul>
        <li>$GLOBALS</li>
        <li>$_SERVER</li>
        <li>$_REQUEST</li>
        <li>$_POST</li>
        <li>$_GET</li>
        <li>$_FILES</li>
        <li>$_ENV</li>
        <li>$_COOKIE</li>
        <li>$_SESSION</li>
    </ul>

    <h1>$GLOBALS</h1>
    <?php
        $x = 75;
        $y = 25;
         
        function addition() {
          $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
         
        addition();
        echo $z;
    ?>
    <br>

    <h1>$_SERVER</h1>
    <?php
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
    ?>
    <br>

    <h1>$_REQUEST</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_REQUEST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>

    <h1>$_POST</h1>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>
    <br>

    <a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
    <?php
        echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
    ?>
</body>
</html>