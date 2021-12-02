<?php
	if($_POST){
		include "../connection.php";
        $pengarang = $_POST['pengarang'];
		$judul  = $_POST['judul'];
		$harga = $_POST['harga'];
		
		//mulai upload file
		$nama = $_FILES['file']['name'];
		$ukuran	= $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];
		//akhir upload file
		
		if(empty($pengarang)){
			echo "<script>alert('Pengarang tidak boleh kosong');location.href='tambah_comic.php';</script>";
		} elseif(empty($judul)){
			echo "<script>alert('Judul tidak boleh kosong');location.href='tambah_comic.php';</script>";
		}elseif(empty($harga)){
			echo "<script>alert('Harga tidak boleh kosong');location.href='tambah_comic.php';</script>";
        } else {
			include "connection.php";
			
			//mulai upload file
			move_uploaded_file($file_tmp, '../../assets/images/comic/'.$nama);
			$insert=mysqli_query($conn,"insert into comic (pengarang, judul, harga, foto_comic) value ('".$pengarang."','".$judul."', '".$harga."', '".$nama."')");
			//akhir upload file
			
			if($insert){
				echo "<script>alert('Sukses menambahkan comic');location.href='../category/comic.php';</script>";
			} else {
				echo "<script>alert('Gagal menambahkan comic');location.href='tambah_comic.php';</script>";
			}
		}		
	}
?>