<?php

class pemesanan {

    private $id_pesanan;
    private $nama_pemesan;
    private $id_barang;
    private $jumlah_pesanan;
	private $satuan;
	private $konversi;
	private $lead_time;
	private $pakai;

    function setId_Pesanan($id_pesanan) {
        $this->id_pesanan = $id_pesanan;
    }

    function setNama_Pemesan($nama_pemesan) {
        $this->nama_pemesan = $nama_pemesan;
    }

    function setId_Barang($id_barang) {
        $this->id_barang = $id_barang;
    }

    function setJumlah_Pesanan($jumlah_pesanan) {
        $this->jumlah_pesanan = $jumlah_pesanan;
    }

    function setSatuan($satuan) {
        $this->satuan = $satuan;
    }

    function setKonversi($konversi) {
        $this->konversi = $konversi;
    }
		
	function setLead_Time($lead_time) {
        $this->lead_time = $lead_time;
    }

	function setPakai($pakai) {
        $this->pakai = $pakai;
    }

    function getId_Pesanan($id_pesanan) {
        return $id_pesanan;
    }

    function getNama_Pemesan($nama_pemesan) {
        return $nama_pemesan;
    }

    function getId_Barang($id_barang) {
        return $id_barang;
    }

    function getJumlah_Pesanan($jumlah_pesanan) {
        return $jumlah_pesanan;
    }

    function getSatuan($satuan) {
        return $satuan;
    }

    function getKonversi($konversi) {
        return $konversi;
    }
	
	function getLead_Time($lead_time) {
        return $lead_time;
    }
	function getPakai($pakai) {
        return $pakai;
    }

    function PesananTambah() {
        $conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
        $sqlPesananTambah = mysqli_query($conn, "INSERT INTO pemesanan (nama_pemesan, id_barang, jumlah_pesanan, lead_time, pakai) VALUES ('$this->nama_pemesan', '$this->id_barang', '$this->jumlah_pesanan', '$this->lead_time', '$this->pakai')");
    }

    function PesananList() {
        $conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
        $sqlPesananList = mysqli_query($conn, "SELECT
									pemesanan.id_pesanan,
									pemesanan.nama_pemesan,
									barang.nama_barang,
									pemesanan.jumlah_pesanan,
									barang.satuan,
									barang.konversi,
									pemesanan.lead_time,
									pemesanan.pakai,
									pemesanan.jumlah_pesanan * barang.konversi AS 'jumlah_total'
									FROM pemesanan JOIN barang USING (id_barang)");
        while ($row = mysqli_fetch_array($sqlPesananList)) {
            $data [] = $row;
        }
        return $data;
    }
	function GunaBarang ()
	{
        $conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
		$sqlGunaBarang = mysqli_query ($conn, "SELECT * FROM pemesanan");
		while ($row = mysqli_fetch_array ($sqlGunaBarang))
			{
				$data [] = $row;
			}
	}
	

    function PakaiBarangById($id) 
	{
        $conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
        $sqlPakaiBarang = mysqli_query($conn, "SELECT * FROM pemesanan WHERE id_pesanan = '$id'");
        while ($row = mysqli_fetch_array($sqlPakaiBarang)) {
            $data [] = $row;
        }
        return $data;
    }
	function PakaiBarangUpdate ()
	{
        $conn = mysqli_connect("localhost", "root", "", 'eoq_tk4');
		$sqlPakaiUpdate = mysqli_query ($conn, "UPDATE pemesanan SET pakai = '$this->pakai' WHERE id_pesanan = '$this->id_pesanan'");
	}

}

?>