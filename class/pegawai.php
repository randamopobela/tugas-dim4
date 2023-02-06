<?php
	class pegawai
	{
		private $id_pegawai;
		private $username;
		private $password;
		private $nama_pegawai;		
		private $alamat_pegawai;
		private $hp_pegawai;
		private $id_bagian;
		
		function setId_Pegawai ($id_pegawai)
		{
			$this->id_pegawai = $id_pegawai;
		}
		function setUsername ($username)
		{
			$this->username = $username;
		}
		function setPassword ($password)
		{
			$this->password = $password;			
		}
		function setNama_Pegawai ($nama_pegawai)
		{
			$this->nama_pegawai = $nama_pegawai;
		}
		function setAlamat_Pegawai ($alamat_pegawai)
		{
			$this->alamat_pegawai = $alamat_pegawai;
		}
		function setHp_Pegawai ($hp_pegawai)
		{
			$this->hp_pegawai = $hp_pegawai;
		}		
		function setId_Bagian ($id_bagian)
		{
			$this->id_bagian = $id_bagian;
		}
		function getId_Pegawai ($id_pegawai)
		{
			return $id_pegawai;
		}
		function getUsername ($username)
		{
			return $username;
		}
		function getPassword ($password)
		{
			return $password;
		}
		function getNama_Pegawai ($nama_pegawai)
		{
			return $nama_pegawai;
		}
		function getAlamat_Pegawai ($alamat_pegawai)
		{
			return $alamat_pegawai;
		}
		function getHp_Pegawai ($hp_pegawai)
		{
			return $hp_pegawai;
		}
		function getId_bagian ($id_bagian)
		{
			return $id_bagian;
		}
		function AddPegawai ()
		{
			$conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
			$sqlAddPegawai = mysqli_query ($conn, "INSERT INTO pegawai (id_pegawai, username, password, nama_pegawai, alamat_pegawai, hp_pegawai, id_bagian) VALUES ('$this->id_pegawai','$this->username', '$this->password', '$this->nama_pegawai', '$this->alamat_pegawai', '$this->hp_pegawai', '$this->id_bagian')");
		}
		function PegawaiList ()
		{
			$conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
			$sqlPegawaiList = mysqli_query ($conn, "SELECT id_pegawai, username, password, nama_pegawai, alamat_pegawai, hp_pegawai, nama_bagian FROM pegawai NATURAL JOIN bagian ORDER BY nama_pegawai ASC ");
			while ($row = mysqli_fetch_array ($sqlPegawaiList))
			{
				$data [] = $row;
			}
			return $data;
		}
		function findPegawaiById ($id)
		{
			$conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
			$sqlEditPegawai = mysqli_query ($conn, "SELECT * FROM pegawai WHERE id_pegawai = '$id'");
			while ($row = mysqli_fetch_array ($sqlEditPegawai))
			{
				$data[] = $row;
			}
			return $data;			
		}
		function PegawaiUpdate ()
		{
			$conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
			$sqlPegawaiUpdate = mysqli_query ($conn, "UPDATE pegawai SET username = '$this->username', password = '$this->password', nama_pegawai ='$this->nama_pegawai', alamat_pegawai = '$this->alamat_pegawai', hp_pegawai = '$this->hp_pegawai', id_bagian = '$this->id_bagian' WHERE id_pegawai = '$this->id_pegawai'");
		}
		function PegawaiDelete ($id)
		{
			$conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
			$sqlPegawaiDelete = mysqli_query ($conn, "DELETE FROM pegawai WHERE id_pegawai = '$id'");
		}
		function Welcome ()
		{
			$conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
			$sqlWelcome = mysqli_query ($conn, "SELECT nama_pegawai FROM pegawai");
		}		
	}

?>
