<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Comic</title>
	    <style>
        body{
            background-image: url(cover2.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 120%;
            position: relative;
        }
    </style>
</head>
<body>
	<?php
	include '../header.php'; 
	?>
<center><h3 style="color: #FFEBC9">TAMBAH COMIC</h3></center>
<form action="proses_tambah_comic.php" method="post" enctype="multipart/form-data">
	<div class="table-responsive">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<div class="mb-3 row">
    			<td><label class="col-sm-2 col-form-label" style="color: #FFEBC9">Pengarang</label></td>
    			<div class="col-sm-10" style="background: ">
     			<td><input type="text" name="pengarang" placeholder="Masukkan Nama Pengarang" class="form-control" style="background: #D79771; color: #753422"></td>
				</div>
			</div>
			</tr>
			<tr>
				<div class="mb-3 row">
    			<td><label class="col-sm-2 col-form-label" style="color: #FFEBC9">Judul</label></td>
    			<div class="col-sm-10">
     			<td><input type="text" name="judul" placeholder="Masukkan Judul Buku" class="form-control" style="background: #D79771; color: #753422"></td>
				</div>
			</tr>
			<tr>
				<div class="mb-3 row">
    			<td><label class="col-sm-2 col-form-label" style="color: #FFEBC9">Harga</label></td>
    			<div class="col-sm-10">
     			<td><input type="text" name="harga" placeholder="Masukkan Harga Buku" class="form-control" style="background: #D79771; color: #753422"></td>
				</div>
			</tr>
			<tr>
				<div class="mb-3 row">
				<td><label class="col-sm-2 col-form-label" style="color: #FFEBC9">Foto</label></td>
				<td><input class="form-control" name="file" type="file" id="formFile" style="background: #D79771; color: #753422"></td>
				</div>
			</tr>
			<tr>
				<td colspan="4"><input type="submit" class="btn btn-secondary" value="SUBMIT" style="background: #753422; color:#FFEBC9"></td>
			</tr>
		</thead>
	</table>
	<script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous">
        </script>
	</div>
</form>
</body>
</html>