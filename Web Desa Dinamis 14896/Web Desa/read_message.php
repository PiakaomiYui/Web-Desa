<?php
  $id = isset($_GET['id_pesan']) ? $_GET['id_pesan'] : 0;

  $connect = mysqli_connect("localhost", "root", "", "data_desa");
  $query = 'SELECT * from pesan_admin where id = "'.$id.'"';
  $pesan_query = $connect->query($query);
  $pesan = mysqli_fetch_assoc($pesan_query);
?>

<div class="main_f-message">
  <div class="f-message">
    <p class="judul_f-message"><?php echo "".$pesan['judul'].""; ?></p>
    <p class="tanggal_f-message">Tanggal <?php echo $pesan['tanggal']; ?></p>
    <p class="pengirim_f-message">Dikirim Oleh <?php echo $pesan['pengirim']; ?></p>
    <p class="isi_f-message"><?php echo $pesan['isi']; ?></p>
  </div>
</div>
