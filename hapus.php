<?php
require_once('koneksi.php');

$id = $_GET['id'];
$sql = "DELETE FROM tbl_barang WHERE no= ?";
$row = $koneksi->prepare($sql);
$row->execute(array($id));

echo '<script>alert("Berhasil Hapus Data");window.location="index.php"</script>';
