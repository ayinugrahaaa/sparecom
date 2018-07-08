<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
    }
include "datauser.php";
include "header.php";

if(isset($_GET["home"])){
  include "home.php";
}
else if(isset($_GET["detail"])){
  include "detail.php";
}
else if(isset($_GET["testimoni"])){
  include "testimoni.php";
}
else if(isset($_GET["produk"])){
  include "produk.php";
}
else if(isset($_GET["detailproduk"])){
  include "detailproduk.php";
}
include "footer.php";

 ?>
