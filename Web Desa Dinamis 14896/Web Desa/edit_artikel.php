<?php
  error_reporting(0);

  $id = isset($_GET['id_artikel']) ? $_GET['id_artikel'] : 0;

  $connect = mysqli_connect("localhost", "root", "", "data_desa");
  $query = 'SELECT * from artikel_desa where id ="'.$id.'"';
  $artikel_query = $connect->query($query);
  $artikel = mysqli_fetch_array($artikel_query);
?>



<div class="main_write-artikel">
  <form class="write_artikel" action="proses.php?id=7" method="post">
    <h3>Edit Artikel</h3> <br>
    <input type="text" name="judul_artikel" placeholder="Judul" size="50" class="input-title_write-artikel" value="<?php echo $artikel[1]; ?>"> <br>
    <textarea name="isi_artikel" rows="20" cols="100" placeholder="Isi Artikel" class="input-content_write-artikel"><?php echo $artikel[5]; ?></textarea> <br>
    <input type="Submit" name="submit_artikel" value="Buat" class="button_write-artikel">
  </form>
</div>

<?php
  session_start();
  $_SESSION['id_artikel'] = $id;

  mysqli_close($connect);
?>
