<?php
	include("koneksi.php");
		$kode_transaksi = $_POST['kode_transaksi'];
		$tanggal_transaksi = $_POST['tanggal_transaksi'];
		$nama_pembeli = $_POST['nama_pembeli'];
		$total_harga = $_POST['total_harga'];
		$jenis_transaksi = $_POST['jenis_transaksi'];
		$result = mysqli_query($connect,"update transaksi set tanggal_transaksi='$tanggal_transaksi', nama_pembeli='$nama_pembeli', total_harga='$total_harga', jenis_transaksi='$jenis_transaksi' where kode_transaksi='$kode_transaksi'");
		echo "Data telah diupdate<br><a href=\"index.php\">Kembali</a>";
?>