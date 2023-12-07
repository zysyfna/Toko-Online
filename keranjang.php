<?php
include "header.php"?>
<h2>Daftar Kue</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th><th>Nama Kue</th><th>Jumlah</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($_SESSION['cart'] as $key_produk => $val_produk): ?>
            <tr>
                <td><?=($key_produk+1)?></td><td><?=$val_produk['nama_kue']?></td><td><?=$val_produk['qty']?></td><td><a href="hapus.php?id_kue=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>


        <?php endforeach ?>
    </tbody>    
</table>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
<!-- <?php 
    include "footer.php";
?> -->
