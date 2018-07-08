<?php
include 'koneksi.php';
session_start();
  if (isset($_POST['submit'])){
      $email=$_POST['email'];
      $password=$_POST['password'];
      $sql1="SELECT * from pengguna where password='$password' AND email='$email'";
      $query=mysqli_query($koneksi,$sql1);
      $rows=mysqli_num_rows($query);
      if ($rows==1){
        $_SESSION["login_user"]=$email;
        header("location:user.php?home");
      }
      else{
        echo "username atau password belum terdaftar";
      }
  }
 ?>
