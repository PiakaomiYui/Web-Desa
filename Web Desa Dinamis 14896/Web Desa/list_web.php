<div class="main_list-artikel">
  <div class="main-list">
    <h3>List Artikel</h3> <br>

    <div class="list-artikel">
      <?php
        $connect = mysqli_connect("localhost", "root", "", "data_desa");
        $query = 'SELECT * from artikel_desa';
        $artikel_query = $connect->query($query);

        while ($list_artikel = mysqli_fetch_array($artikel_query)) {
          echo "<p class=nama-artikel>".$list_artikel[1]."</p><a href=dashboard.php?page=edit_artikel&&id_artikel=".$list_artikel[0]." class=action-hapus><i class='fa fa-pencil'></i></a><a href=proses.php?id=6&&id_artikel=".$list_artikel[0]." class=action-hapus><i class='fa fa-trash'></i></a>
          <p class=penulis-artikel>Oleh ".$list_artikel[3]."</p>";
        }
      ?>
    </div>
  </div>
</div>
