<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Comic</title>
    <link rel="stylesheet" href="../../assets/css/style-comic.css">
</head>
<body class = "bg">
 <?php 
    include "../header.php";
    include "../connection.php";
    $qry_detail_comic=mysqli_query($conn,"select * from comic where id_comic = '".$_GET['id_comic']."'");
    $dt_comic=mysqli_fetch_array($qry_detail_comic);
?>
<h2 style="color: #FFEBC9">Beli Buku</h2>
<br>
<div class="row">
    <div class="col-md-4">
        <img src="../../assets/images/comic/<?=$dt_comic['foto_comic']?>" class="card-img-top" height="500px">
    </div>
    <div class="col-md-8">
        <form action="../cart/proses_cart_comic.php?id_comic=<?=$dt_comic['id_comic']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td style="color: #FFEBC9">Nama Buku</td>
                        <td style="color: #FFEBC9;"><?=$dt_comic['judul']?></td>
                    </tr>
                    <tr>
                        <td style="color: #FFEBC9">Pengarang</td>
                        <td style="color: #FFEBC9"><?=$dt_comic['pengarang']?></td>
                    </tr>
                    <tr>
                        <td style="color: #FFEBC9">Jumlah Beli</td>
                        <td><input type="number" name="jumlah_beli" value="1" style="color: #753422; background: #D79771" class="form-control"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="BELI" style="background: #753422; color:#FFEBC9"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
include "../footer.php";
?>   
</body>
</html>
