<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Web Desa Parakancanggah</title>
    <link rel="stylesheet" href="assets/css/main_style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen" title="no title">
    <link rel="icon" href="assets/css/img/ico.png">
  </head>
  <body>

    <?php
    session_start();
    
    if (!isset($_SESSION["Nama"])) {
      header("location:index.php");
    }

    if ($_SESSION["Jabatan"] == "Admin") {
      $gambar = "fp_admin.jpg";
    }

    else {
      $gambar = "fp.jpg";
    }

    $nama_awal = substr($_SESSION['Nama'], 0, 1);

    ?>

    <div class="header">
      <p class="name_web">
        Web Desa Parakancanggah <span>
         <?php if ($_SESSION["Jabatan"] == "Admin") {
          echo "<a href=dashboard.php class=dash><i class='fa fa-dashboard'></i>Dashboard</a><a href=logout.php class=out><i class='fa fa-power-off'></i>Sign Out</a>";
        }
        else {
          echo "<a href=logout.php class=dash><i class='fa fa-power-off'></i>Sign Out</a>";
        }?></span>
      </p>
    </div>

    <div class="sidebar">
      <div class="fp"><p><?php echo $nama_awal ?></p></div>
      <p class="profile"><?php echo $_SESSION["Nama"]; ?></p>
      <p class="profile"><?php echo $_SESSION["Jabatan"]; ?></p>

      <ul class="nav">
        <li class="nav-li"><a href="home.php?page=artikel" class="nav-a"><i class="fa fa-home"></i>Home</a></li>
        <?php if ($_SESSION["Jabatan"] == "Member") {
          echo "<li class=nav-li><a href=home.php?page=kirim_pesan class=nav-a><i class='fa fa-send'></i>Kirim Pesan</a></li>";
        } ?>
        <?php if ($_SESSION["Jabatan"] == "Admin") {
          echo "<li class=nav-li><a href=home.php?page=message class=nav-a><i class='fa fa-envelope'></i>Message</a></li>";
        } ?>
        <li class="nav-li"><a href="logout.php" class="nav-a"><i class="fa fa-power-off"></i>Sign Out</a></li>
      </ul>
    </div>

      <?php
      if(isset($_GET['page']))
      {
        switch($_GET['page'])
        {
          case 'artikel': include'article.php'; break;
          case 'kirim_pesan': include'kirim_pesan.php'; break;
          case 'message': include'message.php'; break;
          case 'read_message': include'read_message.php'; break;
          case 'full_article': include'full_article.php';
        }
      }

      else {
        include 'article.php';
      }
      ?>

  </body>
</html>
