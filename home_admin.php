<?php
include "koneksi.php";
include "dataadmin.php";
?>
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>SPC | IT UNIVERSITAS LAMPUNG</title>
	<meta name="description" content="Distro, cikarang, terlengkap, information, technology, jababeka, baru, murah"/>
	<meta name="keywords" content="Kaos, Murah, Cikarang, Baru, terlengkap, harga, terjangkau" />
	<meta name="author" content="Hakko Bio Richard"/>
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

	<!--start: Header -->
	<header>

		<!--start: Container -->
		<div class="container">

			<!--start: Row -->
			<div class="row">

				<!--start: Logo -->
				<div class="logo span3">

					<a class="brand" href="#"><img src="logo disini" alt="Logo"></a>

				</div>
				<!--end: Logo -->

				<!--start: Navigation -->
				<div class="span9">

					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li class="active"><a href="home_admin.php"><?php echo $nama_session;?><b></b></a>
														</ul>
			              			</li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>

				</div>
				<!--end: Navigation -->

			</div>
			<!--end: Row -->

		</div>
		<!--end: Container-->

	</header>


      <!-- start: Footer Menu -->
  	<div id="footer-menu" class="hidden-tablet hidden-phone">

  		<!-- start: Container -->
  		<div class="container">

  			<!-- start: Row -->
  			<div class="row">

  				<!-- start: Footer Menu Logo -->
  				<div class="span2">
  					<div id="footer-menu-logo">
  						<a href="#"><img src="img/logo-footer-menu.png" alt="logo" /></a>
  					</div>
  				</div>

  				<!-- end: Footer Menu Links-->

  				<!-- start: Footer Menu Back To Top -->
  				<div class="span1">

  					<div id="footer-menu-back-to-top">
  						<a href="#"></a>
  					</div>

  				</div>
  				<!-- end: Footer Menu Back To Top -->

  			</div>
  			<!-- end: Row -->

  		</div>
  		<!-- end: Container  -->

  	</div>
  	<!-- end: Footer Menu -->

  	<!-- start: Footer -->

  <div id="footer">

    <!-- start: Container -->
    <div class="container">

      <!-- start: Row -->
      <div class="row">

        <!-- start: About -->
        <div class="span3">

          <h3>Tentang SpareCom</h3>
          <p>
            SpareCom adalah toko online yang bergerak di bidang teknologi, sasaran kami semua kalangan baik muda maupun tua, mulai dari anak - anak dan orang dewasa. Kami juga berfokus pada penjualan aksesoris komputer maupun perangkat komputer juga (spare part).
          </p>

        </div>
        <!-- end: About -->

        <!-- start: Photo Stream -->
        <div class="span3">

          <h3>Alamat Kami</h3>
          Jln. Prof. Dr. Soemantri Brojonegoro No. 1 Fakultas Matematika dan Ilmu Pengetahuan Alam, Bandar Lampung, Lampung 35000<br />
                    Telp : 082282227226<br />
                    Email : <a href="mailto:sparecom@gmail.com">sparecom@gmail.com</a>
        </div>
        <!-- end: Photo Stream -->

        <div class="span6">
          <!-- start: Follow Us -->

          <h3>Ikuti Kami!</h3>
          <ul class="social-grid">
            <li>
              <div class="social-item">
                <div class="social-info-wrap">
                  <div class="social-info">
                    <div class="social-info-front social-twitter">
                      <a href="http://twitter.com"></a>
                    </div>
                    <div class="social-info-back social-twitter-hover">
                      <a href="http://twitter.com"></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="social-item">
                <div class="social-info-wrap">
                  <div class="social-info">
                    <div class="social-info-front social-facebook">
                      <a href="http://facebook.com"></a>
                    </div>
                    <div class="social-info-back social-facebook-hover">
                      <a href="http://facebook.com"></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="social-item">
                <div class="social-info-wrap">
                  <div class="social-info">
                    <div class="social-info-front social-dribbble">
                      <a href="http://dribbble.com"></a>
                    </div>
                    <div class="social-info-back social-dribbble-hover">
                      <a href="http://dribbble.com"></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="social-item">
                <div class="social-info-wrap">
                  <div class="social-info">
                    <div class="social-info-front social-flickr">
                      <a href="http://flickr.com"></a>
                    </div>
                    <div class="social-info-back social-flickr-hover">
                      <a href="http://flickr.com"></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>

          <!-- end: Follow Us -->

          <!-- start: Newsletter -->
        <!--	<form id="newsletter">
            <h3>Newsletter</h3>
            <p>Please leave us your email</p>
            <label for="newsletter_input">@:</label>
            <input type="text" id="newsletter_input"/>
            <input type="submit" id="newsletter_submit" value="submit">
          </form> -->
          <!-- end: Newsletter -->

        </div>

      </div>
      <!-- end: Row -->

    </div>
    <!-- end: Container  -->

  </div>
  <!-- end: Footer -->

  <!-- start: Copyright -->
  <div id="copyright">

    <!-- start: Container -->
    <div class="container">

      <p>
        Copyright &copy; <a href="http://www.google.com">SpareCom 2018</a> <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> designed by BAF
      </p>

    </div>
    <!-- end: Container  -->

  </div>
  <!-- end: Copyright -->
