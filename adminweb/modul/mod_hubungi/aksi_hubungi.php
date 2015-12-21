<?php
session_start();
include "../../../config/koneksi.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus hubungi
if ($module=='hubungi' AND $act=='hapus'){
  mysql_query("DELETE FROM hubungi WHERE id_hubungi='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}
elseif ($module=='hubungi' AND $act=='update') {
	mysql_query("UPDATE hubungi SET status='$_POST[status]',harga='$_POST[harga]' WHERE id_hubungi='$_POST[id]'");
	header('location:../../media.php?module='.$module);
}
?>
