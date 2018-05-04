<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/css/index_style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen" title="no title">
    <link rel="icon" href="assets/css/img/ico.png">
  </head>
  <body>
  <?php 
    $id_error = isset($_GET['id_error']) ? $_GET['id_error'] : 0;

    switch ($id_error) {
      case 0:
        # code...
        break;
      case 1:
        echo "<script>alert('Isi Form Pendaftaran!')</script>";
        break;
      case 2:
        echo "<script>alert('Email Kosong!')</script>";
        break;
      case 3:
        echo "<script>alert('Password Kosong!')</script>";
        break;
      case 4:
        echo "<script>alert('Password Tidak Cocok!')</script>";
        break;
      default:
        # code...
        break;
    }
  ?>
    <div class="main">
      <div class="form_logup">
        <div class="logo">
          <i class='fa fa-user'></i>
        </div>
        <form class="main_form_logup" action="proses.php?id=2" method="post">
          <input type="text" name="nama" size="50" placeholder="Nama Lengkap" class="box_form" autofocus="" required=""> <br>
          <input type="Email" name="email" size="50" placeholder="Email" class="box_form" required=""> <br>
          <input type="Password" name="password" size="50" placeholder="Password" class="box_form" required=""> <br>
          <input type="Password" name="repassword" size="50" placeholder="Cocokan Password" class="box_form" required=""> <br>
          <input type="Submit" name="submit" value="Sign Up" class="button_logup">
        </form>
      </div>
    </div>
  </body>
</html>
