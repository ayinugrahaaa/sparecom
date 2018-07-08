<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
    }

if(isset($_GET["home"])){
  include "home1.php";
}
else if(isset($_GET["detail"])){
  include "detail1.php";
}
else if(isset($_GET["testimoni"])){
  include "testimoni1.php";
}
else if(isset($_GET["produk"])){
  include "produk1.php";
}
else if(isset($_GET["detailproduk"])){
  include "detailproduk1.php";
}
include "footer.php";

 ?>
