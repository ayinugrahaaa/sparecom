<?php
include "koneksi.php";
include "proses_login.php";
include "header.php";
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
?><html>
<style>

{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

div.bg{
    background: url("img/slider.jpg");
    background-size: 40cm 20cm;
}

div.konten{
    background: #ffffff;
    width: 350px;
    margin: 40px auto 0;
    border-radius: 16px;
    min-height: 256px;
    overflow: hidden;
}

div.kepala{
    background: green;
    padding: 10px 22px;
    height: 60px;
}

div.kepala h2.judul{
    color: #fff;
    font-weight: normal;
    line-height : 40px;
    display: inline-block;
}

div.lock{
    background-image: url("img/lockk.png");
    background-position: center;
    background-size: 38px;
    display: inline-block;
    width: 25px;
    height: 25px;
    margin-top: 0;
    float: left;
    margin-right: 10px;
}

div.artikel{
    padding:10px 22px 0;
    color: #808080;
}

div.artikel div.grup{
    margin: 16px 0;
}

div.artikel div.grup label,
div.artikel div.grup input{
    display: block;
}

div.artikel div.grup label{
    font-size: 13px;
}

div.artikel div.grup input[type="text"],
div.artikel div.grup input[type="password"]{
    width: 50%;
    height: 30px;
    padding: 0 10px;
    background: #eeeeee;
    border:none;
    color: #808080;
}

div.artikel div.grup input[type="submit"]{
    background: #33cd77;
    width: 10%;
    height: 30px;
    padding: 4px 16px;
    margin: 0 auto;
    border: 3px solid #33cd77;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
}

div.artikel div.grup input[type="submit"]:hover{
    background: #28a45e;
}
</style>
<head>
  <form name="edit" action="proses_edit.php" method="POST">
</head>
<body>
  <div class="bg">
            <center><h2 class="judul">HI..!!   <?php echo $nama_session?></h2>
        <div class="artikel" >
                <div class="grup">
                <center>  <input type="text" name="user" placeholder="username : <?php echo $nama_session?>">
                </div>
                <div class="grup">
                  <center>  <input type="text"  name="email" placeholder="email : <?php echo $email_session?>">
                </div>
                <div class="grup">
                    <center><input type="password"  name="password" placeholder="password : ********">
                </div>
                <div class="grup">
                <center>  <input type="text"  name="alamat" placeholder="alamat : <?php echo $alamat_session?>">
                </div>
                <div class="grup">
                <center>  <input type="text"  name="kota_usr" placeholder="Kota : <?php echo $kota_session?>">
                </div>
                <div class="grup">
                  <center>  <input type="text"  name="tlp" placeholder="Nomor Handphone : <?php echo $tlp_session?>">
                </div>
                <div class="grup">
                    <center><input type="text"  name="nmrek" placeholder="Nomor Rek : <?php echo $nmrek_session?>">
                </div>
                <div class="grup">
                <center>  <input type="text"  name="bank" placeholder="Bank : <?php echo $bank_session?>">
                </div>
                <div class="grup">
                  <input type="submit" name="edit" value="Edit Profile">

            </form>
        </div>
    </div>
</body>
</html>
<?php
include "footer.php";
?>
