    <!-- section menu start  -->

    <section class="pesan">
       <h1>Pesan Ayam Geprek</h1>
       <form action="<?= BASEURL; ?>/pesan/pesanan" method="post">
          <label for="nama">Nama:</label>
          <input type="text" id="nama" name="nama" required autocomplete="off"><br>


          <label for="nowa">No Whatsapp:</label>
          <input type="tel" id="nowa" name="nowa" required autocomplete="off"><br>

          <label for="alamat">Alamat:</label>
          <textarea style="height: 120px;" id="alamat" name="alamat" required autocomplete="off"></textarea><br>


          <div class="bungkus" style="margin-top: 20px;">
             <?php foreach($data['menu'] as $row): ?>
             <?php if($row['status'] != 'kosong')  :?>
             <div class="jualan">
                <label for="<?php $row['nama'] ?>"><?php echo $row['nama'] ?></label>
                <img src="images/<?= $row['gambar'] ?>" height="200" width="250">
                <input type="number" id="<?= $row['nama'] ?>" name="<?= $row['nama'] ?>" min="0" max="10" value="0"><br>
             </div>
             <?php endif ?>
             <?php endforeach ?>


          </div>


          <input name="pesan" type="submit" value="Pesan"
             onclick="return confirm('Apa anda yakin dengan pesanan anda ?')">
       </form>
    </section>


    <!-- section menu end  -->