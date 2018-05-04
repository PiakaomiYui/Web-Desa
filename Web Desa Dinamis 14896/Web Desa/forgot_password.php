<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="assets/css/index_style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen" title="no title">
    <link rel="icon" href="assets/css/img/ico.png">
  </head>
  <body>
    <div class="main">
      <div class="form_login">
        <div class="logo">
          <i class='fa fa-user'></i>
        </div>
        <form class="main_form_login" action="proses.php?id=4" method="post">
          <input type="Email" name="email" size="50" placeholder="Email" class="box_form" required=""> <br>
          <input type="Password" name="password" size="50" placeholder="Password Baru" class="box_form" required=""> <br>
          <input type="Password" name="repassword" size="50" placeholder="Cocokan Password" class="box_form" required="">
          <input type="Submit" name="submit" value="Ubah" class="button_login">
        </form>
      </div>
    </div>
  </body>
</html>
