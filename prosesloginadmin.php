<?php
include 'koneksi.php';
session_start();
      $username=$_POST['user'];
      $password=$_POST['pass'];
      $sql1="SELECT * from admin where password='$password' AND username='$username'";
      $query=mysqli_query($koneksi,$sql1);
      $rows=mysqli_num_rows($query);
      if ($rows==1){
        $_SESSION["login_admin"]=$username;
        header("location:home_admin.php");
      }
      else
        header("location:admin.php");
 ?>
