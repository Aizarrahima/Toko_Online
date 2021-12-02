<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Jumlah Beli</title>
</head>
<body>
        <?php 
        include "../header.php";
        include "../connection.php";
        $id = $_GET['id'];
        $qry_ubah=mysqli_query($conn,"select * from comic where id_comic");
        $session_comic=$_SESSION['cart'][$id];
        $id_comic=$session_comic['id_comic'];
        $qry_ubah=mysqli_query($conn,"select * from comic where id_comic=".$id_comic);
        $dt_comic=mysqli_fetch_array($qry_ubah);
        ?>
        <h3 align="center">Ubah Jumlah Pembelian</h3>
        <div class="row">
            <div class="col-md-4">
                <img src="../../assets/images/comic/<?=$dt_comic['foto_comic']?>" height="450px" class="card-img-top">
            </div>
            <div class="col-md-8">
                <form action="proses_ubah_jumlah_pembelian.php?id=<?=$id?>" method="post">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <td>Nama Buku</td>
                                <td><?=$dt_comic['judul']?></td>
                            </tr>
                            <tr>
                                <td>Pengarang</td>
                                <td><?=$dt_comic['pengarang']?></td>
                            </tr>
                            <tr>
                                <td>Jumlah Beli</td>
                                <td><input type="number" name="jumlah_beli" value="<?=$session_comic['qty']?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input class="btn btn-success" type="submit" value="UBAH"></td>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div> 
</body>
</html>

