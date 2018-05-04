<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Proses</title>
    <link rel="icon" href="assets/css/img/ico.png">
  </head>
  <body>
    <?php
      date_default_timezone_set('Asia/Jakarta');
      $id = isset($_GET['id']) ? $_GET['id'] : 0;

      switch ($id) {
        case 0:
          header('location:index.php');
          break;

          case 1:
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($email == "" || $password == "") {
              header('location:login.php?id_error=1');
            }

            else {
              $connect = mysqli_connect("localhost", "root", "", "data_desa");
              $query = 'SELECT * from user_desa where email = "'.$email.'"';
              $user = $connect->query($query);
              $user_data = mysqli_fetch_array($user);
              $user_data[0];


              if ($user_data == "") {
                header('location:login.php?id_error=2');
              }

              else {
                $connect = mysqli_connect("localhost", "root", "", "data_desa");
                $query = 'SELECT * from user_desa where password = "'.$password.'"';
                $user = $connect->query($query);
                $user_data = mysqli_fetch_array($user);
                $user_data[0];

                if ($user_data == "") {
                  header('location:login.php?id_error=3');
                }

                else {
                  $connect = mysqli_connect("localhost", "root", "", "data_desa");
                  $query = 'SELECT * from user_desa where password = "'.$password.'"';
                  $user = $connect->query($query);
                  $user_data = mysqli_fetch_assoc($user);
                  $user_data[0];

                  $nama_user = $user_data['nama'];
                  $nama_jabatan = $user_data['jabatan'];

                  session_start();
                  $_SESSION["Nama"] = $nama_user;
                  $_SESSION["Jabatan"] = $nama_jabatan;

                  header('location:home.php');
                }
              }
            }
            mysqli_close($connect);
            break;

          case 2:
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];

            if ($nama == "" || $email == "" || $password == "" || $repassword == "") {
              header('location:register.php?id_error=1');
            }

            elseif ($password != $repassword) {
              header('location:register.php?id_error=4');
            }

            else {
              $connect = mysqli_connect("localhost", "root", "", "data_desa");
              $query = 'INSERT into user_desa(nama, email, password, jabatan) values("'.$nama.'", "'.$email.'", "'.$password.'", "Member")';
              $daftar = $connect->query($query);

              mysqli_close($connect);
              header('location:login.php?id_error=4');
            }
            break;

          case 3:
              $id_user = isset($_GET['id_user']) ? $_GET['id_user'] : 0;

              $connect = mysqli_connect("localhost", "root", "", "data_desa");
              $query = 'SELECT jabatan from user_desa where id = "'.$id_user.'"';
              $jabatan_user = $connect->query($query);
              $jabatan = mysqli_fetch_array($jabatan_user);

              echo $jabatan[0];

              if ($jabatan[0] == "Admin") {
                header('location:dashboard.php?page=list_user&&id_error=1');
              }

              else {
                $query = 'DELETE from user_desa where id = "'.$id_user.'"';
                $connect->query($query);
                header('location:dashboard.php?page=list_user');
              }

              mysqli_close($connect);
            break;

          case 4:
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];

            if ($email == "" || $password == "" || $repassword == "") {
              header('location:forgot_password.php');
            }

            elseif ($password != $repassword) {
              header('location:forgot_password.php');
            }

            else {
              $connect = mysqli_connect("localhost", "root", "", "data_desa");
              $query = 'UPDATE user_desa set password = "'.$password.'" where email = "'.$email.'" ';
              $connect->query($query);

              mysqli_close($connect);
              header('location:login.php');
            }
            break;

          case 5:
            session_start();

            $judul = $_POST['judul_artikel'];
            $pembuat = $_SESSION["Nama"];
            $tanggal = date("Y/m/d h:i:sa");
            $isi = $_POST['isi_artikel'];

            if ($judul == "" || $isi == "") {
              header('location:dashboard.php?page=buat_artikel');
            }

            else {
              $connect = mysqli_connect("localhost", "root", "", "data_desa");
              $query = 'INSERT into artikel_desa(judul, tanggal, pembuat, gambar, isi) values("'.$judul.'", "'.$tanggal.'", "'.$pembuat.'", "no_image.jpg", "'.$isi.'")';
              $connect->query($query);

              mysqli_close($connect);
              header('location:dashboard.php?page=list_artikel');
            }
            break;

          case 6:
            $id_artikel = isset($_GET['id_artikel']) ? $_GET['id_artikel'] : 0;

            $connect = mysqli_connect("localhost", "root", "", "data_desa");
            $query = 'DELETE from artikel_desa where id = "'.$id_artikel.'"';
            $connect->query($query);

            mysqli_close($connect);
            header('location:dashboard.php?page=list_artikel');
            break;

          case 7:
            $judul = $_POST['judul_artikel'];
            $isi = $_POST['isi_artikel'];

            session_start();
            $id = $_SESSION['id_artikel'];

            $connect =  mysqli_connect("localhost", "root", "", "data_desa");
            $query = 'UPDATE artikel_desa set judul = "'.$judul.'", isi = "'.$isi.'" where id = "'.$id.'"';
            $connect->query($query);

            mysqli_close($connect);
            header('location:dashboard.php?page=list_artikel');
            break;

          case 8:
            session_start();
            $pengirim = $_SESSION['Nama'];

            $judul = $_POST['judul_pesan'];
            $isi = $_POST['isi_pesan'];
            $tanggal = $tanggal = date("Y/m/d h:i:sa");

            if ($judul == "" || $isi == "") {
              header('location:home.php?page=kirim_pesan');
            }

            else {
              $connect = mysqli_connect("localhost", "root", "", "data_desa");
              $query = 'INSERT into pesan_admin(judul, pengirim, tanggal, isi) values("'.$judul.'", "'.$pengirim.'", "'.$tanggal.'", "'.$isi.'")';
              $connect->query($query);

              mysqli_close($connect);
              header('location:home.php?page=artikel');
            }
            break;
      }
    ?>
  </body>
</html>
