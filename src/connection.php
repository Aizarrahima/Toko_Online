<?php

$conn = mysqli_connect('127.0.0.1', 'root', '', 'toko_buku');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>