<?php require_once("cart.php");
include "koneksi.php";
include "header.php";
?>
<?php
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
<body>
	<!--end: Header-->

	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-usd ico-white"></i>Checkout Keranjang</h2>

			</div>
			<!-- end: Container  -->

		</div>

	</div>
	<!-- end: Page Title -->

	<!--start: Wrapper-->
	<div id="wrapper">

		<!-- start: Container -->
		<div class="container">

			<!-- start: Table -->
                 <div class="table-responsive">
                 <div class="title"><h3>Checkout Selesai</h3></div>
                 <div class="hero-unit">Selamat Anda telah berhasil checkout, silahkan catat info di bawah ini..</div>
                 <div class="hero-unit">
    <?php
			if($_POST['cekout']){
				echo 'Terima kasih Anda sudah berbelanja di Toko Online kami dan berikut ini adalah data yang perlu Anda catat.';
				echo '<p><b>Total biaya untuk pembelian Produk adalah Rp. '.$_POST['total'].',- dan biaya bisa di kirimkan melalui Rekening Bank BNI cabang Universitas Lampung dengan nomor rekening 123-234-56347-8 atas nama BAF GROUP.</p></b>';
				echo '<p><b>Dan barang akan kami kirim ke alamat di bawah ini:</p></b>';
				echo '<p>Nama Lengkap : '.$namalkp_session;' <br></p>';
                echo '<p>Email : '.$email_session;'<br></p>';
                echo '<p>Alamat : '.$alamat_session;'<br></p>';
                echo '<p>Kode Pos : '.$kodepos_session;'<br></p>';
                echo '<p>Kota : '.$kota_session;'<br></p>';
                echo '<p>No Telepon : '.$tlp_session;'<br></p>';
                echo '<p>Total Belanja : Rp. '.$_POST['total'].',-</p>';
			}
			?>
			<form id="formku" action="proses_selesai.php" method="post" name='selesai'>
				<td><input type="submit" name='selesai' value="CLICK INI UNTUK MELANJUTKAN" class="btn btn-sm btn-danger"/>
                   </div>

			<!-- end: Table -->

		</div>
		<!-- end: Container -->

	</div>
	<!-- end: Wrapper  -->
<?php include "footer.php";
 ?>
<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>

<script src="jquery.validate.js"></script>
    <script>
    $(document).ready(function(){
        $("#formku").validate();
    });
    </script>

    <style type="text/css">
    label.error {
        color: red;
        padding-left: .5em;
    }
    </style>
<!-- end: Java Script -->

</body>
</html>
