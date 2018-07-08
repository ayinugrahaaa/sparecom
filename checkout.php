<?php require_once("cart.php");
include "koneksi.php";
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
include "header.php";?>
<!DOCTYPE html>
<html lang="en">

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
                 <div class="title"><h3>Form Checkout</h3></div>
                 <div class="hero-unit">Harap Pilih Bank Transaksi Anda!</div>
                <div class="hero-unit">Total Belanja Anda Rp. <?php echo abs((int)$_GET['total']); ?>,-</div>
    <form id="formku" action="selesai.php" method="post" name='cekout'>
    <table class="table table-condensed">
    <input type="hidden" name="total" value="<?php echo abs((int)$_GET['total']); ?>">
    <tr>
      <tr>
        <td><label for="bank">Bank</label></td>
        <td><select class="required">
        <option></option>
        <option value="Mandiri">Mandiri</option>
        <option value="BNI">BNI</option>
        <option value="CIMB">CIMB</option>
        <option value="BCA">BCA</option>
        <option value="Bank Jabar">Bank Jabar</option>
        <option value="Danamon">Danamon</option>
        <option value="BRI">BRI</option>
        <option value="Permata">Permata</option>
        </select>
        </td>
      </tr>
      <tr>
      <td></td>
        <td><input type="submit" name='cekout' value="Simpan Data" class="btn btn-sm btn-primary"/>&nbsp;<a href="user.php?detail" class="btn btn-sm btn-primary">Kembali</a></td>
        </tr>
    </table>
    </form>
                   </div>

			<!-- end: Table -->

		</div>
		<!-- end: Container -->

	</div>
	<?php
include "footer.php";
	?>
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
