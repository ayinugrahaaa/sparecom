
<?php
include "koneksi.php";
session_start();
$username_check=$_SESSION['login_admin'];
$sql2="SELECT * from admin where username='$username_check'";
$ses_sql=mysqli_query($koneksi,$sql2);
$row=mysqli_fetch_assoc($ses_sql);
$username_session=$row['username'];
$nama_session=$row['fullname'];
 ?>
