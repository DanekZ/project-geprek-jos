<?php
session_start();


if(isset($_SESSION["pesan"])){
    echo "<script>alert('".$_SESSION["pesan"]."');</script>";
    unset($_SESSION["pesan"]);
}


require 'proses/koneksi.php';

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $acak = $_POST['acak'];
    $query = "INSERT INTO tbregistrasi VALUES (
                '', '$nama','$email','$nohp','$acak'
                )";

    mysqli_query($conn,$query);

    $cek = mysqli_affected_rows($conn);

    if($cek == 1) {
        $_SESSION["masuk"] = true;
        header('Location: pesan.php?acak='.$acak);
           exit;
    } else {
        echo "<script>alert('gagal registrasi')</script>";
    }
   
}
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

    <section class="registrasi">
        <div class="bungkus-registrasi">
            <h1>Registrasi</h1>
            <form action="" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required autocomplete="off" value=""><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required autocomplete="off"><br>

                <label for="telepon">Nomor Telepon:</label>
                <input type="tel" id="telepon" name="nohp" required autocomplete="off"><br>

                <input type="hidden" value="<?php echo time() ?> " name="acak">

                <!-- onclick="if(confirm('yakin ingin Registrasi?')) {alert('Registrasi Berhasil'); window.location.replace('pesan.php');}" -->
                <input name="submit" type="submit" value="Registrasi">
            </form>
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