<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>login pelanggan</title>
</head>
<body>
    <center>
    <div class="container">
        <h6>Login</h6>
    <form action="" method="POST">
    <label>Username</label>
    <input type="text" name="username">

    <label>Password</label>
    <input type="password" name="password">

  <button type="submit" name="submit" class="btn btn-primary mb-4">Login</button>
</form>
</div>  
</center>

<?php
  session_start();
  include 'mkk1.php';
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi, "SELECT * FROM pelanggan where username='$username' and password='$password'");
    if(mysqli_num_rows($query)>0){
      // if($data = mysqli_fetch_assoc($query)){
        $data = mysqli_fetch_assoc($query);
        $_SESSION['nama']=$data['nama'];
        $_SESSION['email']=$data['email'];
        $_SESSION['alamat']=$data['alamat'];
        $_SESSION['no_hp']=$data['no_hp'];
      //}
      header("location: index.php");
    }else{
      header("location: login.php");
    }
  }
  ?>
</body>
</html>