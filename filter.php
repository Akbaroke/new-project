<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
    <?php include 'nav/nav.php'; ?>
    <main class="container">
        <?php $ambildata = mysqli_query($koneksi,"SELECT * FROM produk"); ?>
        
        <div class="header-produk"><h1>pencarian <?= $_GET["keyword"]; ?></h1></div>
        <div class="produk-list">
            <?php
            // search
            if (isset($_GET["search"])){
                $keyword = $_GET["keyword"];
                $ambildata = mysqli_query($koneksi,"SELECT * FROM produk WHERE
                                produk_nama LIKE '%$keyword%' OR
                                produk_kategori LIKE '%$keyword%'");
            }
            while ($tampil = mysqli_fetch_array($ambildata)){
            ?>
            <div class="produk-box">
                <a href="produk_detail.php?id=<?php echo $tampil['produk_id'] ?>"><div>
                    <img src="produk/<?=$tampil['produk_foto1']?>">
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
    <?php include 'footer/footer.php'; ?>
</body>
</html>