<?php 
session_start();
    if($_POST){
        include "koneksi.php";
        
        $qry_get_kue=mysqli_query($koneksi,"SELECT * from kue where id_kue = '".$_GET['id_kue']."'");
        $dt_kue=mysqli_fetch_array($qry_get_kue);
        $_SESSION['cart'][]=array(
            'id_kue'=>$dt_kue['id_kue'],
            'nama_kue'=>$dt_kue['nama_kue'],
            'qty'=>$_POST['jumlah_beli']
        );
    }
    header('location: keranjang.php');
?>
