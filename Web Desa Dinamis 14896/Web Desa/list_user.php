<div class="main_list-user">
  <div class="main-list">
    <h3>List User</h3> <br>
    <p class="info_list-user">Admin tidak bisa dihapus</p> <br>

    <div class="list-user">
      <?php
        $connect = mysqli_connect("localhost", "root", "", "data_desa");
        $query = 'SELECT * from user_desa order by jabatan';
        $user_query = $connect->query($query);

        while ($list_user = mysqli_fetch_array($user_query)) {
          echo "<p class=nama-user>".$list_user[1]."</p><a href=proses.php?id=3&&id_user=".$list_user[0]." class=action-hapus><i class='fa fa-trash'></i></a>
          <p class=jabatan-user>".$list_user[4]."</p>";
        }
      ?>
    </div>
  </div>
</div>
