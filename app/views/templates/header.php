<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $data['judul']; ?></title>
   <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/images/logo.jpeg">

   <!-- external CSS stylesheet -->
   <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">

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
         <a href="<?= BASEURL; ?>/home">Beranda</a>
         <a href="<?= BASEURL; ?>/about">Tentang Kami</a>
         <a href="<?= BASEURL; ?>/menu">Menu</a>
         <a href="<?= BASEURL; ?>/pesan">Pesan</a>
      </div>
      <div class="navbar-extra">
         <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
   </nav>