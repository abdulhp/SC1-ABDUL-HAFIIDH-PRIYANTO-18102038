<?php 
    include "koneksi.php";
    include "create_message.php";
    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $filename = basename($_FILES["gambar"]["name"]);
    $error = false;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if($check !== false) {
            create_message("File is an image-".$check["mime"].".","success","check");
            $error=false;
        }else{
            create_message("File is not an image.","danger","warning");
            $error=false;
        }
    }
    if(file_exists($target_file)) {
        create_message("Sorry, file already exists.","danger","warning");
        $error = true;
    }
    if($_FILES["gambar"]["size"] > 500000) {
        create_message("Sorry, your file is too large.","danger","warning");
        $error = true;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        create_message("Sorry, only JPG, JPEG, PNG & GIF files are allowed.","danger","warning");
        $error = true;
    }
    if($error == true) {
        create_message("Sorry, your file was not uploaded.","danger","warning");
    }else {
        if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            create_message("The file".basename($_FILES["gambar_contoh"]["name"])."has been uploaded.".$check["mime"].".","success","check");
        }else{
            create_message("Sorry, there was an error uploading your file.","danger","warning");
        }
    }

    if(isset($_POST['mahasiswa_id'])) {
        //Kondisi Update
        $sql = "UPDATE mahasiswa SET nama_lengkap='".$_POST['nama_lengkap']."',alamat='".$_POST['alamat']."',kelas_id='".$_POST['kelas_id']."',foto='".$filename."' WHERE(`mahasiswa_id`='".$_POST['mahasiswa_id']."');";
        if($conn->query($sql) === TRUE) {
            $conn->close();
            create_message("Ubah Data Berhasil","success","check");
            header("location:index.php");
            exit();
        }else{
            $conn->close();
            create_message("Error:".$sql."<br>".$conn->error,"danger","warning");
            header("location:index.php");
            exit();
        }
    }else{
        $sql = "INSERT INTO mahasiswa (nama_lengkap, kelas_id, alamat, foto) VALUES ('".$_POST['nama_lengkap']."', '".$_POST['kelas_id']."', '".$_POST['alamat']."', '".$filename."')";
        if($conn->query($sql) == TRUE) {
            $conn->close();
            create_message("Simpan Data Berhasil","success","check");
        }else {
            echo "Error: ".$sql."<br>".$conn->error;
            create_message("Error:".$sql."<br>".$conn->error,"danger","warning");
        }
        header("location:index.php");
        exit();
    }

    
?>