<?php error_reporting(0) ?>
<div class="main">
  <p class="new">
    What's New?
  </p>

  <?php
    $connect = mysqli_connect("localhost","root", "", "data_desa");
    $query = 'SELECT * from artikel_desa order by id DESC limit 1 ';
    $result = $connect->query($query);
    $article_result = mysqli_fetch_array($result);

   echo "<div class=new_article>
    <img src=assets/css/img/".$article_result[4]." class=new_img width=50px height=50px/> <a href=home.php?page=full_article&&id=".$article_result[0]." class=new_title>".$article_result[1]."</a>
  </div>";

  ?>

  <p class="article_my">
    List Article
  </p>

  <?php
    $connect = mysqli_connect("localhost","root", "", "data_desa");
    $query = 'SELECT * from artikel_desa order by id desc';
    $result = $connect->query($query);

    while ($article_result = mysqli_fetch_array($result)) {
      echo "<div class=article>
        <img src=assets/css/img/".$article_result[4]." class=img width=50px height=50px/> <a href=home.php?page=full_article&&id=".$article_result[0]." class=title>".$article_result[1]."</a>
      </div>";
    }
  ?>

</div>

<?php
  mysqli_close($connect);
?>
