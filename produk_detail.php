<?php include "config/koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'tempelates/header_static.php'; ?>
    <link rel="stylesheet" href="produk.css">
    <title>Produk detail</title>

</head>
<body>
    <?php include 'tempelates/nav.php'; ?>
    <?php 
    $id_produk = $_GET['id'];
    $data = mysqli_query($koneksi,"SELECT * FROM produk WHERE produk_id='$id_produk'");
    while($d=mysqli_fetch_array($data)){ ?>
    <main class="container">
        <section class="produk">
            <div class="gambar">
                <div class="gambar-besar">
                    <div class="produk1 aktif">
                        <?php if($d['produk_foto1'] == ""){ ?>
                            <img src="assets/img/produk/noimage.png">
                        <?php }else{ ?>
                            <img src="assets/img/produk/<?= $d['produk_foto1'] ?>">
                        <?php } ?>
                    </div>
                    <div class="produk2">
                        <?php if($d['produk_foto2'] == ""){ false; }else{ ?>
                            <img src="assets/img/produk/<?= $d['produk_foto2'] ?>">
                        <?php } ?>
                    </div>
                    <div class="produk3">
                        <?php if($d['produk_foto3'] == ""){ false; }else{ ?>
                            <img src="assets/img/produk/<?= $d['produk_foto3'] ?>">
                        <?php } ?>
                    </div>
                </div>
                <div class="list-gambar">
                    <div class="produk1 aktif">
                        <?php if($d['produk_foto1'] == ""){ ?>
                            <img src="assets/img/produk/noimage.png">
                        <?php }else{ ?>
                            <img src="assets/img/produk/<?= $d['produk_foto1'] ?>">
                        <?php } ?>
                    </div>
                    <div class="produk2">
                        <?php if($d['produk_foto2'] == ""){
                            ?><script>
                            $(".produk2").css("display", "none");
                            </script><?php
                            false; 
                            }else{ ?>
                            <img src="assets/img/produk/<?= $d['produk_foto2'] ?>">
                        <?php } ?>
                    </div>
                    <div class="produk3">
                        <?php if($d['produk_foto3'] == ""){
                            ?><script>
                            $(".produk3").css("display", "none");
                            </script><?php
                            false; }else{ ?>
                            <img src="assets/img/produk/<?= $d['produk_foto3'] ?>">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="harga">
                <div class="stok-status">
                    <?php
                    if ($d['produk_jumlah'] > 0 ) {
                        echo 'Stok Barang Ready';
                        ?><script>
                            $(".harga > .stok-status").css("background", "#5BB75B");
                        </script><?php
                    }else{
                        echo 'Stok Barang Habis';
                        ?><script>
                            $(".harga > .stok-status").css("background", "#D9534F");
                        </script><?php
                    }
                    ?>
                </div>
                <div class="judul"><?= $d['produk_nama'] ?></div>
                <div class="rp">Rp <?= number_format($d['produk_harga'],0,',','.') ?></div>
                <div class="stok">Stok Tersedia : <?= $d['produk_jumlah'] ?></div>
                <div class="quant">Quantity :
                    <div class="counter">
                        <span class="down" onClick='decreaseCount(event, this)'>-</span>
                        <input type="number" value="1" >
                        <span class="up" onClick='increaseCount(event, this)'>+</span>
                    </div>
                </div>
                <div class="kirim">
                    <button class="beli"><i class="fa-brands fa-whatsapp"></i> Beli Sekarang</button>
                    <button class="keranjang"><i class="fa-solid fa-cart-plus"></i> Keranjang</button>
                </div>
            </div>
        </section>
        <section class="detail">
            <div class="judul">Detail Produk</div>
            <div class="ket">
                <textarea readonly><?= $d['produk_keterangan'] ?></textarea>
            </div>
        </section>
        <script src="produk.js"></script>
    </main>
    <?php } ?>
    <?php include 'tempelates/footer.php'; ?>