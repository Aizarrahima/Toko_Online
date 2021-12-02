<?php 
    session_start();
    include "connection.php";
    $cart=@$_SESSION['cart'];
    if(count($cart)>0){
        $lama_perjalanan=5; //satuan hari
        $tgl_harus_datang=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_perjalanan),date('Y')));
        mysqli_query($conn,"insert into pembelian_comic (id_user, tanggal_beli, tanggal_datang) value('".$_SESSION['id_user']."','".date('Y-m-d')."','".$tgl_harus_datang."')");
         $id=mysqli_insert_id($conn);
        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into detail_pembelian_comic(id_pembelian_comic, id_comic, qty) value('".$id."','".$val_produk['id_comic']."','".$val_produk['qty']."')");
            
        }
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil membeli comic");location.href="histori_pembelian.php"</script>';
    }
?>