<?php
	$connect = mysqli_connect("localhost","root","","ibu_nur") or die ("Gagal Masuk Ke Server");

	$kode_transaksi = $_GET['kode_transaksi'];
	$result = mysqli_query($connect,"select * from transaksi where kode_transaksi='$kode_transaksi'") or die ("Gagal Mengganti Query");
		$buff = mysqli_fetch_array($result);
				mysqli_close($connect);
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Edit Data Transaksi</title>
</head>
<body>
	<h1> Ubah Data Transaksi </h1>
		<form name="form1" method="post" action="update.php">
			<table>
				<tr>
					<td> Kode Transaksi </td>
					<td>
						<input type="text" name="kode_transaksi" size="60" value="<?php echo $buff['kode_transaksi'];?>">
					</td>
				</tr>

				<tr>
					<td> Tanggal Transaksi </td>
					<td>
						<input type="date" name="tanggal_transaksi" size="60" value="<?php echo $buff['tanggal_transaksi'];?>">
					</td>
				</tr>
				<tr>
					<td> Nama Pelanggan </td>
					<td>
						<input type="text" name="nama_pembeli" size="60" value="<?php echo $buff['nama_pembeli'];?>">
					</td>
				</tr>
				<tr>
					<td> Total Transaksi </td>
					<td>
						<input type="text" name="total_harga" size="60" value="<?php echo $buff['total_harga'];?>">
					</td>
				</tr>
				<tr>
					<td> Jenis Transaksi </td>
					<td>
						<input name="jenis_transaksi" type="radio" value="Tunai" checked="tunai">Tunai
        				<input name="jenis_transaksi" type="radio" value="Kredit">Kredit
					</td>
				</tr>
				<tr>
					<td>
						<input value="Simpan" name="submit" type="submit">
					</td>
				</tr>
				<tr>
					<td>
						<input value="Ulangi" type="reset">
					</td>
				</tr>
				<tr>
					<td>
						<input value="Kembali" type="button"  onClick="self.history.back()">
					</td>
				</tr>

</body>
</html>