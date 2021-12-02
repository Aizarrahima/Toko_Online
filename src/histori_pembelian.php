<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori Pembelian</title>
    <link rel="stylesheet" href="../assets/css/style-comic.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
</head>
<body class="bg">
    <nav class="navbar navbar-expand-lg navbar-light"
         style="box-shadow: 4px 4px 5px -4px; background: #753422;">
    <div class="container-fluid">
    <a class="navbar-brand" style = "color : #FFEBC9" href="#">OWL BOOK STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"href="index.php">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"
        href="index.php">Category</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"
        href="index.php">About</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"
        href="cart/cart.php">Cart</a>
    </li>
    </li>
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"
        href="signin/signin.php">Log In</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"
        href="signup/signup.php">Register</a>
    </li>
    </li>
    </li>
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"
        href="logout.php">Log Out</a>
    </li>
    </ul>
    </div>
    </div>
</nav>
<div style="margin-right: 2%; margin-left: 2%">
<h2 style="color: #FFEBC9; text-align: center"><strong>Histori Pembelian Buku</strong></h2>
<br>
<div class="table-responsive">
<table class="table" style = "color : #FFEBC9">
    <thead style = "text-align: center;">
        <th>NO</th>
        <th>Invoice</th>
        <th>Tanggal Beli</th>
        <th>Tanggal Datang</th>
        <th>Nama Buku</th>
        <th>Status</th>
        <th colspan="2">Aksi</th>
    </thead>
    <tbody>
        <?php 
        include "connection.php";
        $qry_histori=mysqli_query($conn,"select * from pembelian_comic order by id_pembelian_comic desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            
            //menampilkan comic yang dibeli
            $comic_dibeli="<ol>";
            $qry_comic=mysqli_query($conn,"select * from  detail_pembelian_comic join comic on comic.id_comic=detail_pembelian_comic.id_comic where id_pembelian_comic = '".$dt_histori['id_pembelian_comic']."'");
            while($dt_comic=mysqli_fetch_array($qry_comic)){
                $comic_dibeli.="<li>".$dt_comic['judul']."</li>";
            }
            $comic_dibeli.="</ol>";
            //menampilkan status sudah datang atau belum
            $qry_cek_datang=mysqli_query($conn,"select * from kedatangan_comic where id_pembelian_comic = '".$dt_histori['id_pembelian_comic']."'");
            if(mysqli_num_rows($qry_cek_datang)>0){
                $dt_datang=mysqli_fetch_array($qry_cek_datang);
                $status_datang="<label class='alert alert-success'>Sudah datang <br></label>";
                $button_datang="";
            } else {
                $status_datang="<label class='alert alert-danger'>Belum datang</label>";
                $button_datang="<a href='datang.php?id=".$dt_histori['id_pembelian_comic']."' class='btn btn-warning' onclick='return confirm(\"apakah anda yakin comic sudah datang?\")'>Konfirmasi</a>";
            }
        ?>
        <tr style="color: #FFEBC9">
            <td ><?=$no?></td>
            <td style = "text-align: center;">INVOICE <?php echo $dt_histori['id_pembelian_comic']?></td>
            <td style = "text-align: center;"><?=$dt_histori['tanggal_beli']?></td>
            <td style = "text-align: center;"><?=$dt_histori['tanggal_datang']?></td>
            <td style = "text-align: center;"><?=$comic_dibeli?></td>
            <td style = "text-align: center;"><?=$status_datang?></td>
            <td style = "text-align: center;"><a href="../src/invoice/transaksi_invoice.php?id=<?php echo $dt_histori['id_pembelian_comic'] ?>" target="_blank" class="btn btn-sm btn-secondary">Invoice</a></td>
            <td><?=$button_datang?></td>            
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
</div>
<?php 
    include "footer.php";
?>
</body>
</html>