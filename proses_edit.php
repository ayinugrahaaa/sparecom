<?php
include "koneksi.php";
session_start();
$email_check=$_SESSION['login_user'];
if (isset($_POST['edit'])){
  $user1=$_POST['user'];
  $email1=$_POST['email'];
  $password1=$_POST['password'];
  $kota=$_POST['kota_usr'];
  $tlp=$_POST['tlp'];
  $nmrek=$_POST['nmrek'];
  $bank=$_POST['bank'];
  $alamat=$_POST['alamat'];
    $insert="UPDATE pengguna  SET email='$email1', password='$password1',alamat='$alamat',user='$user1',kota_usr='$kota',tlp='$tlp',nmrek='$nmrek', bank='$bank' WHERE email='$email_check'";
  $daftar=mysqli_query($koneksi,$insert);
  if($daftar==1){
    echo 'Akun Berhasil Diubah ';
  }
  else {
    echo'gagal';
  }
}
 ?>
 <html>
 <a href="detailuser.php">Kembali</a>
 </html>
