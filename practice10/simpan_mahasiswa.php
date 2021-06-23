<?php 
    include "koneksi.php";

    if(isset($_POST['mahasiswa_id'])) {
        //Kondisi Update
        $sql = "UPDATE mahasiswa SET nama_lengkap='".$_POST['nama_lengkap']."',alamat='".$_POST['alamat']."',kelas_id='".$_POST['kelas_id']."'WHERE(`mahasiswa_id`='".$_POST['mahasiswa_id']."');";
        if($conn->query($sql) === TRUE) {
            $conn->close();
            header("location:index.php");
            exit();
        }else{
            $conn->close();
            header("location:index.php");
            exit();
        }
    }else{
        $sql = "INSERT INTO mahasiswa (nama_lengkap, kelas_id, alamat) VALUES ('".$_POST['nama_lengkap']."', '".$_POST['kelas_id']."', '".$_POST['alamat']."')";
        if($conn->query($sql) == TRUE) {
            $conn->close();
        }else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
        header("location:index.php");
        exit();
    }
?>