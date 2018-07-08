<?php
include "koneksi.php";
session_start();
$email_check=$_SESSION['login_user'];
$sql2="SELECT * from pengguna where email='$email_check'";
$ses_sql=mysqli_query($koneksi,$sql2);
$row=mysqli_fetch_assoc($ses_sql);
$nama_session=$row['user'];
$email_session=$row['email'];
$alamat_session=$row['alamat'];
$kota_session=$row['kota_usr'];
$tlp_session=$row['tlp'];
$nmrek_session=$row['nmrek'];
$norek_session=$row['norek'];
$bank_session=$row['bank'];
$kodepos_session=$row['kode_pos'];
$namalkp_session=$row['nama_lengkap'];
 ?>
