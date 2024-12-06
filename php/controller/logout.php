<?php
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['motpass'])) {
        setcookie($_SESSION['email'], $_SESSION['motpass']);
        unset($_SESSION['email']);
        unset($_SESSION['motpass']);
    }

    
    header('location:../../index.php');
    session_destroy();
?>
