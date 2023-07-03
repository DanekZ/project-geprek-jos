<?php
require 'proses/koneksi.php';

$barang = query("SELECT * FROM tbbarang");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">

    <!-- feather icon  -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My style  -->
    <link rel="stylesheet" href="css/style.css">

    <title>Menu Ayam Geprek</title>
</head>

<body>

    <!-- navbar start -->

    <nav class="navbar">
        <a href="#" class="navbar-logo">Geprek<span>Joss.</span> </a>

        <div class="navbar-nav">
            <a href="index.php">Beranda</a>
            <a href="about.php">Tentang Kami</a>
            <a href="menu.php">Menu</a>
            <a href="pesan.php">Pesan</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- navbar end -->


    <!-- section menu start  -->

    <section id="menu" class="menu">
        <h2><span>Menu </span>Kami</h2>
        <p>Menu ayam geprek joss kami menawarkan hidangan ayam geprek dengan bumbu pedas yang otentik dan nikmat.</p>

        <div class="row">
            <?php foreach($barang as $row): ?>
            <?php if($row['status'] != 'kosong') :?>
            <div class="menu-card">
                <img src="images/<?php echo $row['gambar'] ?>" alt="">
                <h3 class="menu-card-title"><?= $row['nama'] ?></h3>
                <p class="menu-card-price">
                    Rp <?= $row['harga'] ?>.000
                </p>
                <button class="menu-card-button" onclick="document.location.href='pesan.php'">Pesan</button>
            </div>
            <?php endif ?>
            <?php endforeach ?>

        </div>
    </section>

    <!-- section menu end  -->




    <script>
    feather.replace()
    </script>
    <script src="js/script.js">
    </script>
</body>

</html>