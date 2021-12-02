<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori Pembelian</title>
    <link rel="stylesheet" href="../assets/css/style-comic.css">
</head>
<body class="bg">
    <?php 
include "header.php";
?>
<h2 style="color: #FFEBC9">Histori Pembelian Buku</h2>
<br>
<div class="table-responsive">
<table class="table table-hover table-striped">
    <thead style = "text-align: center; color: #FFEBC9">
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
<?php 
    include "footer.php";
?>
</body>
</html>