<?php
include "koneksi.php";
?>
<style type="text/css">
.konten
{
margin-top: 20px;
margin-left: 350px;
margin-right: 15px;
color: black;
font-family: calibri;
font-size: 20px;
font-weight: none;
}
.komentar
{
position: center;
margin-top: 20px;
margin-left: 340px;
margin-right: 15px;
color: gray;
font-family: calibri;
font-size: 14px;
font-weight: none;
border: 1px solid #;
width: 700px;
height: 260px;
overflow: scroll;
}
</style>
<div id="page-title">

  <div id="page-title-inner">

    <!-- start: Container -->
    <div class="container">

      <h2><i class="ico-stats ico-white"></i>Testimoni</h2>

    </div>
    <!-- end: Container  -->

  </div>

</div>
<!-- end: Page Title -->

<!--start: Wrapper-->
<div id="wrapper">

  <!--start: Container -->
    <div class="container">
      <center><div class="title" style="margin-left: ;"><h3>Berikan masukan untuk kami, Agar kami bisa melayani anda lebih baik lagi...</h3></div></center>
          <form id="formku" method="post" action="proses.php" onsubmit="return formCheck(this);">
<table style="font-style: oblique; font-weight: bold; margin-left: 140px;">
<tr>
<td width="150">Nama</td>
<td width="30">:</td>
<td name="nama"><?php echo $nama_session;?></td>
</tr>
<tr>
<td width="150">Email</td>
<td width="30">:</td>
<td name="email"><?php echo $email_session;?></td>
</tr>
<tr>
<td width="150">Komentar</td>
<td width="30">:</td>
<td width="550"><input type="text" name="komentar" size="30" class="required" minlength="3" placeholder="Komentar Anda " /></td>
</tr>
<tr>
<td width="150"></td>
<td width="30"></td>
<td width="550">
<input name="submit" class="button" type="submit" value="Kirim"/>
</td>
</tr>
</table>
</form>
</div>
<div class="komentar">
<?php
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt","r");
echo "<table border=0>";

while ($isi = fgets($fp,250))
{
$pisah = explode("|",$isi);
echo "<tr><td>$pisah[0], $pisah[1]</td></tr>";
echo "<tr><td><font color=brown>$pisah[2]</font>, Bilang</td></tr>";
echo "<tr><td>$pisah[4]</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
}
echo "</table>";
?>
</div>
</div>
  </div>
  <!--end: Container-->

  <!--start: Container -->
    <div class="container">

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

  </div>
  <!--end: Container-->

</div>
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
