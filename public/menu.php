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






   <script>
   feather.replace()
   </script>
   <script src="js/script.js">
   </script>
</body>

</html>