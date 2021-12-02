<?php
    session_start();
    $id = (int) $_GET['id'];
    $_SESSION['cart'][$id]['qty']=$_POST['jumlah_beli'];
    header('location: ../cart/cart.php');
?>