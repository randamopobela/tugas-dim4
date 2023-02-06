<?php
	class pengambilan
	{
		private $id_pengambilan;
		private $nama_pengambil;
		private $id_produksi;
		private $id_barang;
		private $jumlah_pengambilan;
		
		function setId_Pengambilan ($id_pengambilan)
		{
			$this->id_pengambilan = $id_pengambilan;
		}
		function setNama_Pengambil ($nama_pengambil)
		{
			$this->nama_pengambil = $nama_pengambil;
		}
		function setId_Produksi ($id_produksi)
		{
			$this->id_produksi = $id_produksi;
		}
		function setId_Barang ($id_barang)
		{
			$this->id_barang = $id_barang;
		}
		function setjumlah_pengambilan ($jumlah_pengambilan)
		{
			$this->jumlah_pengambilan = $jumlah_pengambilan;
		}
		function getId_Pengambilan ($id_pengambilan)
		{
			return $id_pengambilan;
		}
		function getNama_Pengambil ($nama_pengambil)
		{
			return $nama_pengambil;
		}
		function getId_Produksi ($id_produksi)
		{
			return $id_produksi;
		}
		function getId_Barang ($id_barang)
		{
			return $id_barang;
		}
		function getjumlah_pengambilan ($jumlah_pengambilan)
		{
			return $jumlah_pengambilan;
		}
		function AddAmbil_Barang ()
		{
			$conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
			$sqlAmbilBarang = mysqli_query ($conn, "INSERT INTO pengambilan (id_pengambilan, nama_pengambil, id_produksi, id_barang, jumlah_pengambilan) VALUES ('$this->id_pengambilan', '$this->nama_pengambil',  '$this->id_produksi', '$this->id_barang', '$this->jumlah_pengambilan')");
		}
		function AmbilBarangList ()
		{
			$conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
			$sqlAmbilBarangList = mysqli_query ($conn, "SELECT pengambilan.nama_pengambil, barang.nama_barang, pengambilan.jumlah_pengambilan FROM pengambilan JOIN barang ON pengambilan.id_barang = barang.id_barang");
			while ($row = mysqli_fetch_array ($sqlAmbilBarangList))
			{
				$data [] = $row;
			}
			return $data;
		}
	}
?>