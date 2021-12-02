<?php 
if($_GET['id']){
    include "connection.php";
    $id_pembelian_comic=$_GET['id'];
    $cek_terlambat=mysqli_query($conn, "select * from pembelian_comic  where id_pembelian_comic = '".$id_pembelian_comic."' ");
    $dt_beli=mysqli_fetch_array($cek_terlambat);
    if(strtotime($dt_beli['tanggal_datang'])>=strtotime(date('Y-m-d'))){
        $denda=0;
    } else{
        $tanggal_datang= new DateTime();
        $tgl_harus_datang= new DateTime($dt_beli['tanggal_datang']); 
    }

    mysqli_query($conn, "insert into kedatangan_comic (id_pembelian_comic, tanggal_datang) value('".$id_pembelian_comic."','".date('Y-m-d')."')");
    header('location: histori_pembelian.php');
}
?>