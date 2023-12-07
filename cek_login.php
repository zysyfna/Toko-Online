<?php
session_start();
include 'koneksi.php';

$username = $_POST['nama'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from user where nama= '".$username."'
and password='".$password."'");
$cek = mysqli_num_rows($login);
if($cek > 0){

    $data = mysqli_fetch_array($login);
    if($data['nama']==$username){
        $qry_login=mysqli_query($koneksi,"select * from user where nama = '".$username."' and password = '".$password."'");
        $dt_login=mysqli_fetch_array($qry_login);
        $_SESSION['password'] = $password;
        $_SESSION['id_user']=$dt_login['id_user'];
        header("location:home2.php");

        //cek jika user login sebaagai pegawai
    // }else if($data['nama']==$username){
    //     $_SESSION['password'] = $password;
    //     header("location:home2.php");
    // }
    }else{
        header("location:login.php?pesan=gagal");
    }
}
?>