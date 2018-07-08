<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    }
if(isset($_GET["admin"])){
  include "home_admin.php";
}
 ?>
