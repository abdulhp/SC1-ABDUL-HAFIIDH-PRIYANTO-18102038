<?php
    session_start();
    if(isset($_GET['process'])) {
        if($_GET['process'] == 'hapus_semua_session') {
            session_destroy();
        }else if($_GET['process'] == 'hapus_session1') {
            unset($_SESSION['session_tersimpan1']);
        }else if($_GET['process'] == 'hapus_session2') {
            unset($_SESSION['session_tersimpan2']);
        }
    }else if(isset($_POST)) {
        $_SESSION['session_tersimpan1'] = $_POST['kolom_input_session1'];
        $_SESSION['session_tersimpan2'] = $_POST['kolom_input_session2'];
    }
    header("location:session_read.php");