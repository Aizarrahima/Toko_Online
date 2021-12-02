<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <!-- cek apakah sudah login -->
    <?php 
    session_start();
    // if($_SESSION['status']!="login"){
    //     header("location:home.php?pesan=belum_login");
    // }
    ?>

    <?php 
    include "../connection.php";
    ?>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <?php 
            //$id = $_GET['id'];
            $transaksi = mysqli_query($conn, "SELECT pembelian_comic.id_pembelian_comic, pembelian_comic.tanggal_beli, pembelian_comic.tanggal_datang, user.first_name, detail_pembelian_comic.qty, comic.harga FROM pembelian_comic JOIN user ON pembelian_comic.id_user = user.id_user JOIN detail_pembelian_comic ON detail_pembelian_comic.id_pembelian_comic = pembelian_comic.id_pembelian_comic JOIN comic ON detail_pembelian_comic.id_comic = comic.id_comic");
            while($t=mysqli_fetch_array($transaksi)){
            ?>
            <center><h2>OWL BOOK STORE</h2></center>
            <h3>INVOICE-<?php echo $t['id_pembelian_comic']; ?></h3>
            <br/>
            <table class="table">
                <tr>
                    <th width="20%">Tgl. Beli</th>
                    <th>:</th>
                    <th><?php echo $t['tanggal_beli']; ?></th>
                </tr>
                <tr>
                    <th>Nama Pembeli</th>
                    <th>:</th>
                    <td><?php echo $t['first_name'] ?></td>
                </tr>
                <tr>
                    <th>Tgl. Datang</th>
                    <th>:</th>
                    <td><?php echo $t['tanggal_datang'] ?></td>
                </tr>
                <tr>
                    <th>Jumlah Pembelian</th>
                    <th>:</th>
                    <td><?php echo $t['qty'] ?></td>
                </tr>
                <th>Harga</th>
                <th>:</th>
                <td><?php echo "Rp. ".number_format($t['harga']*$t['qty'])." ,-"; ?></td>
            </table>
            <br/>
            <h4>Rincian Pembelian Comic</h4>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Buku</th>
                    <th width="20%">Jumlah</th>
                </tr>
                <?php 
                //$id = $t['id_pembelian_comic'];
                $comic = mysqli_query($conn, "select * from comic join detail_pembelian_comic on comic.id_comic=detail_pembelian_comic.id_comic where id_pembelian_comic");

                while($p=mysqli_fetch_array($comic)){
                ?>
                <tr>
                    <td><?php echo $p['judul']; ?></td>
                    <td width="5%"><?php echo $p['qty']; ?></td>
                </tr>
                <?php } ?>
            </table>
            <br/>
            <p><center><i>" TERIMAKASIH SUDAH BERBELANJA "</i></center></p>
            <?php 
            }
            ?>
        </div>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>