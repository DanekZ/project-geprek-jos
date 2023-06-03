<?php
session_start();
if(isset($_SESSION["berhasilpesan"])){
    echo "<script>alert('".$_SESSION["berhasilpesan"]."');</script>";
    unset($_SESSION["berhasilpesan"]);
    unset($_SESSION["masuk"]);
} else if(isset($_SESSION['gagalpesan'])){
    echo "<script>alert('".$_SESSION["gagalpesan"]."');</script>";
    unset($_SESSION["gagalpesan"]);
    unset($_SESSION["masuk"]);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

    <!-- external CSS stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">

    <!-- Feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Geprek<span>Joss.</span></a>
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

    <!-- Hero section -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Nikmati <br><span>Ayam</span> Geprek Kami</h1>
            <p>Kami menyediakan berbagai jenis menu Ayam Geprek</p>
            <a href="registrasi.php" class="cta">Registrasi</a>
        </main>
    </section>

    <!-- Script -->
    <script src="js/script.js"></script>
    <script>
    feather.replace();
    </script>
</body>

</html>