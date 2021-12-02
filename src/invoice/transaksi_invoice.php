<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <?php 
    session_start();
    // if($_SESSION['status_login']!=true){
    //     header('location: home.php?pesan=belum_login');
    // }
    ?>

    <?php 
    include "../connection.php";
    ?>

    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <?php 
            // $id = $_GET['id_comic'];
            $transaksi=mysqli_query($conn, "SELECT pembelian_comic.id_pembelian_comic, pembelian_comic.tanggal_beli, user.first_name, detail_pembelian_comic.qty, comic.harga FROM pembelian_comic JOIN user ON pembelian_comic.id_user = user.id_user JOIN detail_pembelian_comic ON detail_pembelian_comic.id_pembelian_comic = pembelian_comic.id_pembelian_comic JOIN comic ON detail_pembelian_comic.id_comic = comic.id_comic");
            while($dt_transaksi=mysqli_fetch_array($transaksi)){
            ?>

            <center><h2>OWL BOOKSTORE</h2></center>
            <a href="cetak_invoice.php?id=<?php echo $id; ?>" target="_blank" class="btn btn-primary pull-right">CETAK</a>
            <br/>
            <br/>
            <table class="table">
                <tr>
                    <th width="20%">No. Invoice</th>
                    <th>:</th>
                    <td>INVOICE-<?php echo $dt_transaksi['id_pembelian_comic'];?></td>
                </tr>
                <tr>
                <th width="20%">Tgl. Beli</th>
                <th>:</th>
                <td><?php echo $dt_transaksi['tanggal_beli']; ?></td>
                </tr>
                <tr>
                    <th>Nama Pembeli</th>
                    <th>:</th>
                    <th><?php echo $dt_transaksi['first_name']; ?></th>
                </tr>
                <tr>
                    <th>Jumlah Pembelian</th>
                    <th>:</th>
                    <td><?php echo $dt_transaksi['qty']; ?></td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <th>:</th>
                    <td><?php echo "Rp. ".number_format($dt_transaksi['harga']*$dt_transaksi['qty'])." ,-"; ?></td>
                </tr>
            </table>
            <br/>
            <h4 class="text-center">Rincian Pembelian Comic</h4>
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
</body>
</html>