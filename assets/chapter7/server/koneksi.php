<?php
	function open_connection(){
		$host = "localhost";
		$username = "root";
		$password = "password";
		$databasename = "angular";

		
		$link = mysql_connect($host, $username, $password) or die ("Database tidak dapat dihubungkan!");
		

		mysql_select_db($databasename);
		return $link;
	}
?>