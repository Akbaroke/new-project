<?php include "config/koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- My Css -->
    <link rel="stylesheet" href="nav/nav.css">
    <link rel="stylesheet" href="landing.css">
    <link rel="stylesheet" href="footer/footer.css">
    <title>Sandiopetcare.com</title>
=======
    <?php include 'tempelates/header_static.php'; ?>
    <title>Landing Page</title>
>>>>>>> 8ed9ff0 (rebuilding site Wed Jun  8 15:39:22 WIB 2022)
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
</body>
</html>