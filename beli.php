<?php 
    include "home2.php";
    $qry_detail_kue=mysqli_query($koneksi,"select * from kue where id_kue = '".$_GET['id_kue']."'");
    $dt_kue=mysqli_fetch_array($qry_detail_kue);
?>
<h2>Beli Kue</h2>
<div class="row">
    <div class="col-md-4">
        <img src="assets/foto_produk/<?=$dt_buku['foto']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_kue=<?=$dt_buku['id_kue']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Buku</td><td><?=$dt_buku['nama_kue']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td><td><?=$dt_buku['deskripsi']?></td>
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
<?php 
    include "footer.php";
?>
