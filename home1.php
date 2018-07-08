<?php
include "koneksi.php";
include "header1.php";
?>
<div id="da-slider" class="da-slider">
	<div class="da-slide">
		<h2>Processor</h2>
		<p>Kami menyediakan processor dengan berbagai brand, dengan harga yang terjangkau.</p>
		<a href="#" class="da-link">Lihat Produk</a>
		<div class="da-img"><img src="img/parallax-slider/processor.png" alt="image01" /></div>
	</div>
	<div class="da-slide">
		<h2>Game Controller & Keyboard Gaming</h2>
		<p>Kami memiliki banyak koleksi game controller dan keyboard gaming, mulai dari harga terendah hingga kualitas terbaik dan juga barang terbaru.</p>
		<a href="#" class="da-link">Lihat Produk</a>
		<div class="da-img"><img src="img/parallax-slider/game.png" alt="image02" /></div>
	</div>
	<div class="da-slide">
		<h2>RAM</h2>
		<p>Kami memiliki koleksi RAM yang bisa anda gunakan untuk perangkat PC dengan harga yang terjangkau anda bisa memiliki koleksi kami.</p>
		<a href="#" class="da-link">Lihat Produk</a>
		<div class="da-img"><img src="img/parallax-slider/ram.png" alt="image03" /></div>
	</div>
	<div class="da-slide">
		<h2>VGA Card</h2>
		<p>Kami memiliki koleksi VGA Card yang bisa digunakan untuk kebutuhan grafis perangkat PC anda dengan harga terjangkau dan kualitas terbaik.</p>
		<a href="#" class="da-link">Lihat Produk</a>
		<div class="da-img"><img src="img/parallax-slider/vga.png" alt="image04" /></div>
	</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>

	</div>
	<!-- end: Slider -->

	<!--start: Wrapper-->
	<div id="wrapper">

		<!--start: Container -->
    	<div class="container">

      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div class="hero-unit">
        		<p>
					Kami adalah toko spare part komputer online terlengkap dan terpercaya, dengan harga terjangkau anda sudah dapat memiliki produk kami. Selamat Berbelanja Customer..
				</p>
        		<p><a class="btn btn-success btn-large" href="index.php?produk">Mulai Berbelanja &raquo;</a></p>

      		</div>
            <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
			<!-- end: Hero Unit -->

      		<!-- start: Row -->

      		<div class="row">
	                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY br_id DESC limit 9");
                    while($data = mysqli_fetch_array($sql)){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['br_nm']; ?></h3></div>
                        <img src="<?php echo $data['br_gbr']; ?>" />
						<div><h3>Rp.<?php echo number_format($data['br_hrg'],2,",",".");?></h3></div>
					<!--	<p>

						</p> -->
						<div class="clear"><a href="detailproduk1.php?kd=<?php echo $data['br_id'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="cart1.php	?act=add&amp;barang_id=<?php echo $data['br_id']; ?>&amp;ref=index.php?detail" class="btn btn-lg btn-success">Beli &raquo;</a></div>

                    </div>
        		</div>
                <?php
              }


              ?>
<!---->
      		</div>
			<!-- end: Row -->

			<hr>

			<!-- start Clients List -->
			<div class="clients-carousel">

				<ul class="slides clients">
					<li><img src="img/logos/1.png" alt=""/></li>
					<li><img src="img/logos/2.png" alt=""/></li>
					<li><img src="img/logos/3.png" alt=""/></li>
					<li><img src="img/logos/4.png" alt=""/></li>
					<li><img src="img/logos/5.png" alt=""/></li>
					<li><img src="img/logos/6.png" alt=""/></li>
					<li><img src="img/logos/7.png" alt=""/></li>
					<li><img src="img/logos/8.png" alt=""/></li>
					<li><img src="img/logos/9.png" alt=""/></li>
					<li><img src="img/logos/10.png" alt=""/></li>
				</ul>

			</div>
			<!-- end Clients List -->

			<hr>

			<!-- start: Row -->
			<div class="row">

				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ok ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Kemudahan Berbelanja</h3>
								<p>Dapatkan kemudahan berbelanja di SpareCom, Kami menyediakan kebutuhan untuk komputer anda.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-cup  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Juara Pengiriman Delivery</h3>
								<p>Dapatkan kemudahan pengiriman barang ke rumah anda dengan minimal belanja 300 ribu radius 10km dari kantor kami.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ipad ico-color circle-color big"></i>
							<div class="icons-box-vert-info">
								<h3>Berbelanja Dengan Gadget</h3>
								<p>Anda bisa memesan produk kami melalui gadget kesayangan anda, belanja di SpareCom praktis dan mudah.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-thumbs-up  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Sosial Media</h3>
								<p>Follow twitter dan fan page facebook kami untuk mendapatkan update promo special setiap harinya.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->

			<hr>

		</div>
		<!--end: Container-->

	</div>
	<!-- end: Wrapper  -->
<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>
