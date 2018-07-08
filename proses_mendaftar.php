<?php
include "koneksi.php";
session_start();
if (isset($_POST['mendaftar'])){
  $user1=$_POST['user'];
  $email1=$_POST['email'];
  $password1=$_POST['password'];
  $insert="INSERT INTO `pengguna` (`user`, `email`, `password`) VALUES ('$user1', '$email1', '$password1')";
  $daftar=mysqli_query($koneksi,$insert);
  if($daftar==1){
    echo 'Akun Anda Berhasil Disimpan';
  }
  else {
    echo'gagal';
  }
}
 ?>
 <html>
 <a href="login.php">Kembali</a>
 </html>
