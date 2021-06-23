<?php
    include "koneksi.php";

    $sql = "DELETE FROM mahasiswa WHERE mahasiswa_id=".$_GET['mahasiswa_id'];
    if($conn->query($sql) === TRUE) {
        $conn->close();
        header("location:index.php");
        exit();
    }else {
        $conn->close();
        header("location:index.php");
        exit();
    }