<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
</head>
<body>
    <h1>PHP String</h1>
    <?php
        $x = "Hello world!";
        $y = 'Hello world!';

        echo $x;
        echo "<br>";
        echo $y;
    ?>
    <br>

    <h1>PHP Integer</h1>
    <?php
        $x1 = 5985;
        var_dump($x1)
    ?>
    <br>

    <h1>PHP Float</h1>
    <?php
        $x2 = 10.365;
        var_dump($x2)
    ?>
    <br>

    <h1>PHP Boolean</h1>
    <?php
        $x3 = true;
        $y3 = false;
        var_dump($x3, $y3);
    ?>
    <br>

    <h1>PHP Array</h1>
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        var_dump($cars);
    ?>
    <br>

    <h1>PHP Object</h1>
    <?php
        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
                $this->color = $color;
                $this->model = $model;
            }

            public function message() {
                return "My car is a " . $this->color . " " . $this->model . "!";
            }
        }

        $myCar = new Car("black", "Volvo");
        echo $myCar->message();
        echo "<br>";
        $myCar = new Car("red", "Toyota");
        echo $myCar->message();
    ?>
    <br>

    <h1>PHP NULL Value</h1>
    <?php
        $x4 = "Hello world!";
        $x4 = null;
        var_dump($x4);
    ?>
    <br>
</body>
</html>