<?php
	class bagian
	{
		private $id_bagian;
		private $nama_bagian;
		
		function setId_Bagian ($id_bagian)
		{
			$this->id_bagian = $id_bagian;
		}
		function setNama_Bagian ($nama_bagian)
		{
			$this->nama_bagian = $nama_bagian;
		}
		function getId_Bagian ($id_bagian)
		{
			return $id_bagian;
		}
		function getNama_Bagian ($nama_bagian)
		{
			return $nama_bagian;
		}
		function AddBagian ()
		{
			$conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
			$sqlAddBagian = mysqli_query ($conn, "INSERT INTO bagian (nama_bagian) VALUES ('$this->nama_bagian')");
		}
		function BagianList ()
		{
			$conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
			$sqlBagianList = mysqli_query ($conn, "SELECT * FROM bagian ORDER BY nama_bagian ASC");
			while ($row = mysqli_fetch_array ($sqlBagianList))
			{
				$data [] = $row;
			}
			return $data;
		}
		function findBagianById ($id)
		{
			$conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
			$sqlEditBagian = mysqli_query ($conn, "SELECT * FROM bagian WHERE id_bagian = '$id'");
			while ($row = mysqli_fetch_array ($sqlEditBagian))
			{
				$data[] = $row;
			}
			return $data;			
		}
		function BagianUpdate ()
		{
			$conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
			$sqlBagianUpdate = mysqli_query ($conn, "UPDATE bagian SET nama_bagian ='$this->nama_bagian' WHERE id_bagian = '$this->id_bagian'");
		}
		function BagianDelete ($id)
		{
			$conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
			$sqlBagianDelete = mysqli_query ($conn, "DELETE FROM bagian WHERE id_bagian = '$id'");
		}
	}


?>