<?php require_once("koneksi.php");
		if (!isset($_SESSION)) {
				session_start();
		}
		include "header1.php";
	?>
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-usd ico-white"></i>Keranjang</h2>

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
            <div class="title"><h3>Detail Keranjang Belanja</h3></div>
<table class="table table-hover table-condensed">
<tr>
					<th><center>No Pembelian</center></th>
          <th><center>Kode Barang</center></th>
					<th><center>Nama Barang</center></th>
					<th><center>Harga Satuan</center></th>
					<th><center>Jumlah Barang</center></th>
					<th><center>Sub Total</center></th>
					<th><center>Opsi</center></th>
				</tr>
			    <?php
				//MENAMPILKAN DETAIL KERANJANG BELANJA//

    $total = 0;
    //mysql_select_db($database_conn, $conn);
    if (isset($_SESSION['items1'])) {
        foreach ($_SESSION['items1'] as $key => $val) {
            $query = mysqli_query($koneksi, "select * from barang where br_id = '$key'");
            $data = mysqli_fetch_array($query);

            $jumlah_harga = $data['br_hrg'] * $val;
            $total += $jumlah_harga;
            $no = 1;
            ?>
                <tr>
                <td><center><?php echo $no++; ?></center></td>
                <td><center><?php echo $data['br_id']; ?></center></td>
                <td><center><?php echo $data['br_nm']; ?></center></td>
                <td><center><?php echo number_format($data['br_hrg']); ?></center></td>
                <td><center><?php echo number_format($val); ?></center></td>
                <td><center><?php echo number_format($jumlah_harga); ?></center></td>
                <td><center><a href="cart1.php?act=plus&amp;barang_id=<?php echo $key; ?>&amp;ref=index.php?detail" class="btn btn-xs btn-success">Tambah</a> <a href="cart1.php?act=min&amp;barang_id=<?php echo $key; ?>&amp;ref=index.php?detail" class="btn btn-xs btn-warning">Kurang</a> <a href="cart1.php?act=del&amp;barang_id=<?php echo $key; ?>&amp;ref=index.php?detail" class="btn btn-xs btn-danger">Hapus</a></center></td>
                </tr>

					<?php
                    //mysql_free_result($query);
						}
							//$total += $sub;
						}?>
                         <?php
				if($total == 0){
					echo '<tr><td colspan="5" align="center">Ups, Keranjang kosong!</td></tr></table>';
					echo '<p><div align="right">
						<a href="index.php?produk" class="btn btn-info btn-lg">&laquo; Continue Shopping</a>
						</div></p>';
				} else {
					echo '
						<tr style="background-color: #DDD;"><td colspan="4" align="right"><b>Total :</b></td><td align="right"><b>Rp. '.number_format($total,2,",",".").'</b></td></td></td><td></td></tr></table>
						<p><div align="right">
						<a href="index.php?produk" class="btn btn-info">&laquo; CONTINUE SHOPPING</a>
						<a href="checkout1.php?total='.$total.'" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT &raquo;</a>
						</div></p>
					';
				}
				?>

</table>


			<!-- end: Table -->

		</div>
		<!-- end: Container -->

	</div>

<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>
