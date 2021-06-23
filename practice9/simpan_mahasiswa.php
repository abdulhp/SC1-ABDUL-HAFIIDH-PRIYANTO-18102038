<?php 
    include "koneksi.php";

    $sql = "INSERT INTO mahasiswa (nama_lengkap, kelas_id, alamat) VALUES ('".$_POST['nama_lengkap']."', '".$_POST['kelas_id']."', '".$_POST['alamat']."')";
    if($conn->query($sql) == TRUE) {
        $conn->close();
    }else {
        echo "Error: ".$sql."<br>".$conn->error;
    }
    header("location:index.php");
    exit();
?>