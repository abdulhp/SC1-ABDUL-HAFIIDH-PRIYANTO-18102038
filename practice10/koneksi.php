<?php
    $servername = "localhost";
    $username = "ifscxyz1_18102038";
    $password = "4Usp6xeSykeJ";
    $dbname = "ifscxyz1_18102038";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }