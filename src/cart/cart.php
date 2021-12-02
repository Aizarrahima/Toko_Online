<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/style-comic.css">
</head>
<body class="bg">
    
<?php include('../header.php') ?>

<h2 align="center" style="color: #FFEBC9">Daftar Buku di Keranjang</h2>
<br>
<div  style = "margin-left: 5%; margin-right: 5%">
<div class="table-responsive">
<table class="table" style="color: #FFEBC9">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Buku</th>
            <th>Jumlah</th>
            <th style = "text-align: center;" colspan="2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        session_start();
        $cart = [];
        if (isset($_SESSION['cart'])) $cart = @$_SESSION['cart']; 
        $no = 1;
        foreach ($cart as $key_produk => $val_produk):?>
        <tr style="color: #FFEBC9">
            <td><?=$no++?></td>
            <td><?=$val_produk['judul']?></td>
            <td><?=$val_produk['qty']?></td>
            <td style="text-align: right;"><a href="../ubah_jumlah/ubah_jumlah_beli.php?id=<?=$key_produk?>" class="btn btn-success">Ubah</a></td>
            <td ><a href="../hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger">Hapus</a></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>
<a href="../checkout.php" class="btn btn-primary">Check Out</a>
</div>
<?php 
    include "../footer.php";
?>
</body>
</html>
