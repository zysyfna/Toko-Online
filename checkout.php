<?php
session_start();
include "koneksi.php";
$cart = $_SESSION['cart'];

if(count($cart) > 0){
    $qry=mysqli_query($koneksi, "insert into transaksi(id_user, tanggal_transaksi) value ('".$_SESSION['id_user']."', '".date('Y-m-d')."')");
    $id = mysqli_insert_id($koneksi);

    if($qry){
        foreach($cart as $key_produk => $val_produk){
            $tes2 = mysqli_query($koneksi, "insert into detail_transaksi(id_detail_transaksi, id_kue, qty) value ('".$id."', '".$val_produk['id_kue']."','".$val_produk['qty']."')");
        }
    } else {
        echo mysqli_error($koneksi);
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil membeli kue");location.href="histori_pembelian.php"</script>';
}
?>