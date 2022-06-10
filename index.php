<?php include "config/koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'tempelates/header_static.php'; ?>
    <title>Landing Page</title>

</head>
<body>
    <?php include 'tempelates/nav.php'; ?>
    <main class="container">
        <div class="header-produk"><h1>produk tersedia</h1></div>
        <div class="produk-list">
            <?php
            $ambildata = mysqli_query($koneksi,"SELECT * FROM produk");
            while ($tampil = mysqli_fetch_array($ambildata)){
            ?>
            <div class="produk-box">
                <a href="produk_detail.php?id=<?php echo $tampil['produk_id'] ?>"><div>
                    <img src="assets/img/produk/<?=$tampil['produk_foto1']?>">
                    <div class="ket">
                        <h2><?=$tampil['produk_nama']?></h2>
                        <h3>Rp <?= number_format($tampil['produk_harga'],0,',','.') ?>
                        <?php if($tampil['produk_jumlah'] == 0){?> <del class="product-old-price">Kosong</del> <?php } ?></h3>
                    </div>
                </div>
                </a>
            </div>
            
            
            <?php    
            }
            ?>
        </div>
    </main>
    <?php include 'tempelates/footer.php'; ?>
