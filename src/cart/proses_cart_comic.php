<?php 
session_start();
    if($_POST){
        include "../connection.php";
        
        $qry_get_comic=mysqli_query($conn,"select * from comic where id_comic = '".$_GET['id_comic']."'");
        $dt_comic=mysqli_fetch_array($qry_get_comic);
        $_SESSION['cart'][]=array(
            'id_comic'=>$dt_comic['id_comic'],
            'judul'=>$dt_comic['judul'],
            'qty'=>$_POST['jumlah_beli']
        );
    }
    header('location: cart.php');
?>