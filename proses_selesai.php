<?php
include "cart.php";
include "koneksi.php";
if (isset($_POST['selesai'])){
  $email_check=$_SESSION['login_user'];
  $total=$_POST['total'];
  $insert="INSERT INTO pembelian (alamat,user,email) Select alamat,user,email FROM pengguna where email='$email_check'";
  $insert2="INSERT INTO pembelian (tanggal=now(),total='$total') where email='$email_check'";
  $input=mysqli_query($koneksi,$insert);
  $input2=mysqli_query($koneksi,$insert2);
  if($input==1 && $input2==1){
    header("location:user.php?home");
  }
  else {
    echo'gagal';
  }
}
 ?>
