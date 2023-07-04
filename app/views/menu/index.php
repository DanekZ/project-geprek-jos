<!-- section menu start  -->

<section id="menu" class="menu">
   <h2><span>Menu </span>Kami</h2>
   <p>Menu ayam geprek joss kami menawarkan hidangan ayam geprek dengan bumbu pedas yang otentik dan nikmat.</p>

   <div class="row">
      <?php foreach($data['menu'] as $row): ?>
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