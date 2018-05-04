<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="assets/css/index_style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen" title="no title">
    <link rel="icon" href="assets/css/img/ico.png">
  </head>
  <body>
  <?php 
    $id_error = isset($_GET['id_error']) ? $_GET['id_error'] : 0;

    switch ($id_error) {
      case 4:
      echo "<script>alert('Silahkan Login')</script>";
        break;
      case 1:
        echo "<script>alert('Anda Belum Terdaftar, Silahkan Mendaftar Terlebih Dahulu.')</script>";
        break;
      case 2:
        echo "<script>alert('Email salah!')</script>";
        break;
      case 3:
        echo "<script>alert('Password salah!')</script>";
        break;
      default:
        # code...
        break;
    }
  ?>
    <div class="main">
      <div class="form_login">
        <div class="logo">
          <i class='fa fa-user'></i>
        </div>
        <form class="main_form_login" action="proses.php?id=1" method="post">
          <input type="Email" name="email" size="50" placeholder="Email" class="box_form" autofocus="" required=""> <br>
          <input type="Password" name="password" size="50" placeholder="password" class="box_form" required=""> <br>
          <input type="Submit" name="submit" value="Sign In" class="button_login"> <a href="forgot_password.php" class="forgot">Forgot Password?</a>
        </form>
      </div>
    </div>
  </body>
</html>
