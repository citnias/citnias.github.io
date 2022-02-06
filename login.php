<?php
session_start();

if (isset ($_SESSION['login']) ) {
  header('location: index.php');
  exit;
}

  require 'function.php';

  if (isset ($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

    $cek = mysqli_num_rows($result);
    if($cek > 0 ){

      $_SESSION['login'] = true;

    header ('location: index.php');
    exit;
    }
    $error = true;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sekolahku</title>

    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <!-- Login -->

    <form action="" method="post">
      <div class="login text-black text-center bg-info">
        <h3>Silahkan Login</h3>

        <?php if(isset($error)) : ?>
          <?= "
              <script>
                alert('Password / Username Salah!');
                </script>
              ";
          ?>
        <?php endif; ?>
        <Label for="username">Username</Label> <br>
        <input type="text" name="username" id="username" style="text-align: center; color: red;" required autofocus>
        <br>
        <label for="password">Password</label> <br>
        <input type="password" name="password" id="password" style="text-align: center; color: red;" required>
        <br>
        <br>
        <button type="submit" name="login" class="btn btn-success btn-outline-warning">Masuk</button>
      </div>
    </form>

    <!-- Akhir Login -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>