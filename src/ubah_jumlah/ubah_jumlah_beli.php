<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Jumlah Beli</title>
    <link rel="stylesheet" href="../../assets/css/style-comic.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class = "bg">
        <?php
        session_start();
        include "../header.php";
        include "../connection.php";
        $id = $_GET['id'];
        $qry_ubah=mysqli_query($conn,"select * from comic where id_comic");
        $session_comic=$_SESSION['cart'][$id];
        $id_comic=$session_comic['id_comic'];
        $qry_ubah=mysqli_query($conn,"select * from comic where id_comic=".$id_comic);
        $dt_comic=mysqli_fetch_array($qry_ubah);
        ?>
        <h3 align="center" style="color: #FFEBC9">Ubah Jumlah Pembelian</h3>
        <br>
        <div style="margin-right: 5%; margin-left: 5%">
        <div class="row">
            <div class="col-md-4">
                <img src="../../assets/images/comic/<?=$dt_comic['foto_comic']?>" style="height: 500px; width: 400px" class="card-img-top">
            </div>
            <div class="col-md-8">
                <form action="proses_ubah_jumlah_pembelian.php?id=<?=$id?>" method="post">
                    <table class="table table-hover table-striped">
                        <thead style="color: #FFEBC9">
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
                                <td><input type="number" name="jumlah_beli" style="color: #753422; background: #D79771" class="form-control" value="<?=$session_comic['qty']?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input class="btn btn-success" type="submit" value="UBAH" style="background: #753422; color:#FFEBC9"></td>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
        </div> 
</body>
</html>

