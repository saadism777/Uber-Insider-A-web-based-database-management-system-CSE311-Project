<?php
        session_start();
        if (!isset($_SESSION['loggedin'])) {
            header('Location: multiplelogin.php');
            exit;
        }else{
                echo "<script> location.href='admin.php'; </script>";
        }
        
        exit;
?>