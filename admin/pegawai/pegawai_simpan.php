<?php

// memanggil koneksi database

include "../../class/config.php";
include "../../class/pegawai.php";

// mulai penyimpanan

	if (isset($_POST['simpan']));
	{
		//buat objek barang
		$d1 = new database ();
		$d1->koneksidatabase();
		
		$AddPegawai = new pegawai ();
		$AddPegawai->setId_Pegawai($_POST['id_pegawai']); // Penambahan id_pegawai untuk menyesuaikan dengan form tambah pegawai.
		$AddPegawai->setUsername($_POST['username']);
		$AddPegawai->setPassword($_POST['password']);
		$AddPegawai->setNama_Pegawai($_POST['nama_pegawai']);
		$AddPegawai->setAlamat_Pegawai($_POST['alamat_pegawai']);
		$AddPegawai->setHp_Pegawai($_POST['hp_pegawai']);
		$AddPegawai->setId_Bagian($_POST['id_bagian']);
				
		$AddPegawai->AddPegawai();
		
		header ("location:index.php");
	}
	

?>