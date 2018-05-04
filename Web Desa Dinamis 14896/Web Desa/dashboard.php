<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard - Web Desa Parakancanggah</title>
    <link rel="stylesheet" href="assets/css/main_style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen" title="no title">
    <link rel="icon" href="assets/css/img/ico.png">
  </head>
  <body>
  <?php 
  $id_error = isset($_GET['id_error']) ? $_GET['id_error'] : 0;

  switch ($id_error) {
    case 1:
      echo "<script>alert('Admin Tidak Bisa Dihapus!')</script>";
      break;
    
    default:
      # code...
      break;
  }
    ?>
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
        <i class="fa fa-dashboard"></i>Dashboard Admin <span><a href="home.php" class="home"><i class="fa fa-home"></i>Home</a><a href="logout.php" class="out" onclick="return confirm('Yakin Mau Sign Out?');"><i class="fa fa-power-off"></i>Sign Out</a></span>
      </p>
    </div>

    <div class="sidebar">
      <div class="fp"><p><?php echo $nama_awal ?></p></div>
      <p class="profile"><?php echo $_SESSION["Nama"]; ?></p>
      <p class="profile"><?php echo $_SESSION["Jabatan"]; ?></p>

      <ul class="nav">
        <li class="nav-li"><a href="home.php?page=artikel" class="nav-a"><i class="fa fa-home"></i>Home</a></li>
        <li class="nav-li"><a href="dashboard.php?page=list_user" class="nav-a"><i class="fa fa-address-book"></i>List of User</a></li>
        <li class="nav-li"><a href="dashboard.php?page=list_artikel" class="nav-a"><i class="fa fa-book"></i>List of Article</a></li>
        <li class="nav-li"><a href="dashboard.php?page=buat_artikel" class="nav-a"><i class="fa fa-plus"></i>New Article</a></li>
        <li class="nav-li"><a href="logout.php" class="nav-a"><i class="fa fa-power-off"></i>Sign Out</a></li>
      </ul>
    </div>

    <?php
    if(isset($_GET['page']))
    {
      switch($_GET['page'])
      {
        case 'list_artikel': include'list_web.php'; break;
        case 'list_user': include'list_user.php'; break;
        case 'buat_artikel': include'buat_artikel.php'; break;
        case 'edit_artikel': include'edit_artikel.php'; break;
      }
    }

    else {
      include 'list_web.php';
    }
    ?>

  </body>
</html>
