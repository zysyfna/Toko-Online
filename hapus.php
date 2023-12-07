<?php
    session_start();
    unset($_SESSION['cart'][$_GET['id_kue']]);
    header('location: keranjang.php');
?>
