<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/style-comic.css">
</head>
<body class="bg">
<?php 
    include "../header.php";
?>
<h2 style="text-align: center; color: #FFEBC9"> Comic </h2>
<br>
<div class="row">
    <?php 
        include '../connection.php';
        $qry_comic = mysqli_query($conn, "select * from comic");
        while ($dt_comic=mysqli_fetch_array($qry_comic)) {
        ?>
    <div class="col-md-3">
        <div class="card"  style="background: #753422">
            <img img src="<?php echo "../../assets/images/comic/".$dt_comic['foto_comic']; ?>" class="card-img-top" width="118px" height="300px">
            <div class="card-body">
                <p class="card-text" style="color: #FFEBC9">
                    <?=$dt_comic['pengarang']?>
                </p>
                <h5 class="card-title" style="color: #D79771">
                    <?=$dt_comic['judul']?>
                </h5>
                <p class="card-text" style="color: #FFEBC9">
                    <?=$dt_comic['harga']?>
                </p>
                <h5><a href="../beli_comic/beli_comic.php?id_comic=<?=$dt_comic['id_comic']?>" class="btn" style="background: #D79771; color:#FFEBC9">Add To
                    Cart</a></h5>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <?php 
    include "../footer.php";
?>    
</body>
</html>
