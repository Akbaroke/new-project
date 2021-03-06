<header>
    <nav>
        <ul class="nav-container">
            <li class="logo">

                <a href="index"><div><img src="assets/img/LOGO.png" alt="Sandio Petcare"></div></a>

            </li>
            <li class="nav-formsearch">
                <form action="filter.php" method="get">
                    <input type="text" name="keyword" placeholder="Cari...">
                    <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </li>
            <li class="nav-kategori">
                <div>
                    <h2>Semua kategori</h2>
                    <i class="fa-solid fa-angle-down"></i>
                </div>
            </li>
            <?php
            if (isset($_SESSION["keranjang"])) {
                $jumlah_isi_keranjang = count($_SESSION["keranjang"]);
            } else {
                $jumlah_isi_keranjang = 0;
            } 
            ?>
            <li class="nav-keranjang">
                <a href="#">
                    <div><?php echo $jumlah_isi_keranjang; ?></div>
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </li>
            <li>
                <div id=theme>
                    <div onclick=setDarkMode(true) id=darkBtn>
                        🌚
                    </div>
                    <div onclick=setDarkMode(false) id=lightBtn class=is-hidden>
                        🌝
                    </div>
                </div>
            </li>
            <li class="nav-hamburger">
                <i class="fa-solid fa-bars"></i>
                <i class="fa-solid fa-xmark"></i>
            </li>
        </ul>
    </nav>
    <div class="list-kategori">
        <ul>
            <a>makanan kucing</a>
            <a>makanan anjing</a>
            <a>obat kucing</a>
            <a>obat anjing</a>
        </ul>
    </div>
    <div class="list-kategori-mobile">
        <ul>
            <a>makanan kucing</a>
            <a>makanan anjing</a>
            <a>obat kucing</a>
            <a>obat anjing</a>
        </ul>
    </div>
</header>