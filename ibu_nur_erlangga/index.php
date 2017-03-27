<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TRANSAKSI IBU NUR</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Calendar style sheet -->
  <link rel="stylesheet" href="./css/calendar/site.css">

</head>
<body>
	<div id="header">
		<a href="index.php" class="logo">
			<img src="images/logo.jpg" alt="">
		</a>
		<ul id="navigation">
			<li class="selected">
				<a href="index.php">Transaksi</a>
			</li>
			<li>
				<a href="stok.php">Stok</a>
			</li>
		</ul>
	</div>


  <form class="calendar" method="get" name="form" action="">

          <div class="flow-element">
              <input type="date" id="datepicker" name="date">
              <button type="submit"> Submit </button>
          </div>
  </form>


	<?php
	$connect = mysqli_connect("localhost","root","","ibu_nur") or die ("Gagal Konek Ke Server!");
	?>
	<table id="table1" align="center">
		<tr>
			<th>Kode Transaksi</th>
			<th>Tanggal Transaksi</th>
			<th>Nama Pelanggan</th>
			<th>Total Transaksi</th>
			<th>Jenis Transaksi</th>
			<th colspan="4">Aksi</th>
		</tr>


	<?php

    $query = "SELECT * FROM transaksi";

    // jika user meminta transaksi dengan tanggal yang di tentukan
    // ubah $query sql nya
    if ( isset($_GET["date"])) {
      $query = "SELECT * FROM transaksi where tanggal_transaksi = '" .  $_GET["date"] ."'";
    }
    echo $query;
		$result = mysqli_query($connect, $query) or die("query gagal");

    // Jika transaksi tidak di temkan beri pesan ke user
    if($result->num_rows == 0){
      echo '<tr>
    		<td colspan="7"> Maaf transaksi tidak di temukan </td>
      </tr>';
    }
  ?>

  <?php
		//$no = 0;
		while ($buff = mysqli_fetch_array($result))
		{
		//$no++;
	?>

	<tr>
		<td><?php echo $buff['kode_transaksi']; ?></td>
		<td><?php echo $buff['tanggal_transaksi']; ?></td>
		<td><?php echo $buff['nama_pembeli']; ?></td>
		<td><?php echo $buff['total_harga']; ?></td>
		<td><?php echo $buff['jenis_transaksi']; ?></td>

		<td><a href="edit.php?kode_transaksi=<?php echo $buff['kode_transaksi']; ?>">Edit</a></td>
		<td><a href="hapus.php?kode_transaksi=<?php echo $buff['kode_transaksi']; ?>">Hapus</a></td>
	</tr>
	<?php
	}
	mysqli_close($connect);
	?>
	</table>

	<form action='tambah.html' method='POST'>
		<table align="center">
 			<tr>
 				<td> <input type='submit' name='tambah' value='Tambah Transaksi'> </td>
 			</tr>
		</table>
	</form>
	<div id="footer">
		<div>
			<p>&copy;2014 Toko Ibu Nur, All rights reserved.</p>
		</div>
	</div>

</body>
</html>
