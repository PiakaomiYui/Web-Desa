<?php
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$connect = mysqli_connect("localhost","root", "", "data_desa");
$query = 'SELECT * from artikel_desa where id = "'.$id.'"';
$result = $connect->query($query);

$data = mysqli_fetch_assoc($result);

 ?>


<div class="main_f-article">

  <div class="f-article">
    <p class="judul_f-article"><?php print_r($data['judul']) ?></p>
    <p class="tanggal_f-article"><?php print_r($data['tanggal']) ?></p>
    <p class="pembuat_f-article"><?php print_r($data['pembuat']) ?></p>
    <img src="assets/css/img/<?php print_r($data['gambar']) ?>" class="gambar_f-article"/>
    <p class="isi_f-article"><?php print_r($data['isi']) ?></p>
  </div>
</div>
