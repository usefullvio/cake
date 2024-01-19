<?php
  include 'mkk1.php';
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $query = mysqli_query($koneksi, "INSERT INTO pelanggan(nama, username, password, email) values ('$name', '$username', '$password', '$email')");
    if($query){
      header("location: index.php");
    }
  }
  ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="register.css">
  <title>register</title>
</head>
<body>

  <center>
    <div class="container">
      <h6>Registrasi Akun Anda</h6>
      <form action="" method="POST">
    <label>Nama</label><br>
    <input type="text" name="name">

    <label>Username</label><br>
    <input type="text" name="username">

    <label>Password</label>
    <input type="password" name="password">

    <label>Email</label>
    <input type="text" name="email">

  <button type="submit" name="submit">Daftar</button>
  <p>sudah punya akun ?
    <a href="login.php">silahkan login disini</a>
  </p>
</form>
</div>
</center>
</body>
</html>

