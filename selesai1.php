<?php require_once("cart1.php");
include "koneksi.php";
include "header1.php";?>

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
			if($_POST['finish']){
				session_destroy();
				echo 'Terima kasih Anda sudah berbelanja di Toko Online kami dan berikut ini adalah data yang perlu Anda catat.';
				echo '<p>Total biaya untuk pembelian Produk adalah Rp. '.$_POST['total'].',- dan biaya bisa di kirimkan melalui Rekening Bank Mandiri cabang Cikarang dengan nomor rekening 123-234-56347-8 atas nama Hakko Bio Richard.</p>';
				echo '<p>Dan barang akan kami kirim ke alamat di bawah ini:</p>';
				echo '<p>Nama Lengkap : '.$_POST['nm_usr'].'<br>';
                echo 'Email : '.$_POST['email_usr'].'<br>';
                echo 'Alamat : '.$_POST['almt_usr'].'<br>';
                echo 'Kode Pos : '.$_POST['kp_usr'].'<br>';
                echo 'Kota : '.$_POST['kota_usr'].'<br>';
                echo 'No Telepon : '.$_POST['tlp'].'<br>';
                echo 'Total Belanja : Rp. '.$_POST['total'].',-</p>';
			}else{
				header("Location: index.php?home");
			}
			?>
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
