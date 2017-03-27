<?php 
require("koneksi.php");

function tambah_todo($action, $id){
	$link = open_connection();
	$query = "insert into todo (id, action) values (".$id.",'".$action."')";
	$result = mysql_query($query) or die ("gagal insert data");

	mysql_close($link);

	return $result;
}

function show_data(){
	$query = "select * from todo";
	$result = mysql_query($query) or  die("gagal mengambil data dari database");

	mysql_close($link);

	$data = [];

	return $result;
}

function dummy_data(){
	$data = [
		[
			"action" => "Tes Action 1",
			"done" => false,
		],
		[
			"action" => "Tes Action 2",
			"done" => false,
		],
		[
			"action" => "Tes Action 3",
			"done" => false,
		]
	];

	return $data;
}

?>