<?php
	include("tambah.php");

	$method = $_GET['method'];
	switch ($method) {
		case 'get':
			header("Content-Type: application/json");
			$data = dummy_data();			
			echo json_encode($data);
			break;

		case 'post':
			header("Content-Type: application/json");
			$action = $_GET["action"];
			$id = $_GET["id"];
			$result = tambah_todo($action, $id);

			if($result){

				echo json_encode([
				'action' => $action,
				'id' => $id,
				]);	
				return;

			}

			echo 'gagal';
			
			
		default:
			
			break;
	}
	

	// echo json_encode($data);
?>