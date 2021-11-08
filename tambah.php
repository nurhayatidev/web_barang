<?php
require_once('koneksi.php');


if (!empty($_POST['nama_barang'])) {

	$nama_barang = $_POST['nama_barang'];
	$jumlah_barang = $_POST['jumlah_barang'];
	$harga_barang = $_POST['harga_barang'];


	$data[] = $nama_barang;
	$data[] = $jumlah_barang;
	$data[] = $harga_barang;


	$sql = 'INSERT INTO tbl_barang (nama_barang,jumlah_barang,harga_barang)VALUES (?,?,?)';
	$row = $koneksi->prepare($sql);
	$row->execute($data);


	echo '<script>alert("Berhasil Tambah Data");window.location="index.php"</script>';
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Tambah Barang</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="container">
		<br />
		<a href="index.php" class="btn btn-success btn-md"></span>Kembali</a>
		<br />
		<br />
		<h3>Tambah Barang</h3>
		<br />
		<div class="row">
			<div class="col-lg-6">
				<form action="" method="POST">
					<div class="form-group">
						<label>Nama Barang</label>
						<input type="text" value="" class="form-control" name="nama_barang">
					</div>
					<div class="form-group">
						<label>Jumlah Barang</label>
						<input type="text" value="" class="form-control" name="jumlah_barang">
					</div>
					<div class="form-group">
						<label>Harga Barang</label>
						<input type="text" value="" class="form-control" name="harga_barang">
					</div>

					<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i> Tambah</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>