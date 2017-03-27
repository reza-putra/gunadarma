 <?php
include("koneksi.php");
mysqli_query($connect,"DELETE from transaksi WHERE kode_transaksi='$_GET[kode_transaksi]'");
echo"Data Telah dihapus<br>
<a href=\"index.php\">Kembali</a>";
?>
