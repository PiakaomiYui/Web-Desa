<div class="main_list-message">
  <p class="new">Pesan Masuk <i class="fa fa-envelope-open"></i></p>

  <?php
    $connect = mysqli_connect("localhost", "root", "", "data_desa");
    $query = 'SELECT * from pesan_admin order by id DESC';
    $pesan_query = $connect->query($query);
    while ($pesan = mysqli_fetch_array($pesan_query)) {
      echo "<div class=new_box_list-message>
        <a href=home.php?page=read_message&&id_pesan=".$pesan[0]." class=new_title_list-message>".$pesan[1]."</a>
        <p class=new_sender_list-message>Dikirim Oleh ".$pesan[2]."</p>
      </div>";
    }
  ?>
</div>

<?php
  mysqli_close($connect);
?>
