<?php
session_start();
require 'proses/koneksi.php';

if (!isset($_SESSION["masuk"])) {
    $_SESSION["pesan"] = "Harap registrasi terlebih dahulu.";
    header('Location: registrasi.php');
    exit;
}



if(isset($_POST['pesan'])){
    $nama = $_POST['nama'];
    $nohp = $_POST['telepon'];
    $ayamGeprekOri = $_POST['1'] ;
    $ayamGeprekKeju = $_POST['2'] ;
    $ayamGeprekMatah = $_POST['3'] ;
    $telurGeprek = $_POST['4'] ;
    $ayamGeprekBBQ = $_POST['5'] ;
    $ayamGeprekGanja = $_POST['6'] ;
    $alamat = $_POST['alamat'];



   $query = "INSERT INTO tbpembelian VALUES(
    '','$nama','$nohp',$ayamGeprekOri,$ayamGeprekKeju,$ayamGeprekMatah,$telurGeprek,$ayamGeprekBBQ,$ayamGeprekGanja,'$alamat'
   )";

   $result = mysqli_query($conn,$query);
   $cek = mysqli_affected_rows($conn);

   if($cek == 1){
        $_SESSION['berhasilpesan'] = "Pesanan Anda Telah Diterima, Pesanan Akan segera Kami Antar";
        header('Location: index.php');
        exit;
   } else {
     $_SESSION['gagalpesan'] = "Pesanan anda gagal terkirim";
   }

}

if($_GET['acak']){
    $acak = $_GET['acak'];
} else {
    $_SESSION['gagalpesan'] = "pesanan anda gagal terkirim" ;
    header('Location: index.php');
}

$barang = query("SELECT * FROM tbbarang");

$result = mysqli_query($conn,"SELECT * FROM tbregistrasi WHERE acak = $acak");
$orang= mysqli_fetch_assoc($result);


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

    <section class="pesan">
        <h1>Pesan Ayam Geprek</h1>
        <form action="" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required autocomplete="off" readonly
                value="<?= $orang['nama'] ?>"><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required autocomplete="off" readonly
                value="<?= $orang['email'] ?>"><br>

            <label for="telepon">Nomor Telepon:</label>
            <input type="tel" id="telepon" name="telepon" required autocomplete="off" readonly
                value="<?= $orang['nohp'] ?>"><br>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required autocomplete="off"></textarea><br>


            <div class="bungkus">
                <?php foreach($barang as $row): ?>
                <?php if($row['status'] != 'kosong')  :?>
                <div class="jualan">
                    <label for="<?php $row['nama'] ?>"><?php echo $row['nama'] ?></label>
                    <img src="images/<?= $row['gambar'] ?>" height="200" width="250">
                    <input type="number" id="<?= $row['id'] ?>" name="<?= $row['id'] ?>" min="0" max="10" value="0"><br>
                </div>
                <?php endif ?>
                <?php endforeach ?>


            </div>


            <input name="pesan" type="submit" value="Pesan"
                onclick="return confirm('Apa anda yakin dengan pesanan anda ?')">
        </form>
    </section>


    <!-- section menu end  -->




    <script>
    feather.replace()
    </script>
    <script src="js/script.js">
    </script>
</body>

</html>
<?php

// $_SESSION = [];
// session_unset();
// session_destroy();

?>