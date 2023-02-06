<?php
	class database
	{
		private $server = "localhost";
		private $username = "root";
		private $password = "";
		private $database = "eoq_tk4";
		
		function koneksidatabase()
		{
			//koneksi ke database mysql
			$conn = mysqli_connect($this->server, $this->username, $this->password) or die ("tidak ada koneksi database");
			//memilih database di mysql
			mysqli_select_db ($conn, $this->database) or die ("database tidak ketemu");
		}
	}
	$d1 = new database();
	$d1->koneksidatabase();
	

?>