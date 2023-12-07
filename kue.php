<?php 
    include "koneksi.php";
    $qry_detail_kue=mysqli_query($koneksi,"select * from kue where id_kue = '".$_GET['id_kue']."'");
    $dt_kue=mysqli_fetch_array($qry_detail_kue);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<h2>Beli Kue</h2>
<div class="row">
    <div class="col-md-4">
        <img src="img/<?=$dt_kue['foto']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_kue=<?=$dt_kue['id_kue']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Kue</td><td><?=$dt_kue['nama_kue']?></td>
                    </tr>
                    <tr>
                        <td>Harga</td><td><?=$dt_kue['harga']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Beli</td><td><input type="number" name="jumlah_beli" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Beli"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>

