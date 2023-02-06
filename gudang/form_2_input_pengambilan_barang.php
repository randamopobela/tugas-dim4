<!-- mulai form -->
<?php
	include "../tukang_pesan/pesanan_konek.php";
?>
    <div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="pengambilan_simpan.php">
    			<legend> Form Input Pengambilan </legend>
                
                <div class="form-group">
                	<label for="nama instansi" class="col-md-3"> Pengambilan Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="jumlah pengambilan" placeholder="Nama yang Mengambil Pesanan" name="nama_pengambil">
                    </div>
                </div>
                <br>

                <div class="form-group">
                	<label for="nama_barang" class="col-md-3"> Nama Barang  </label>
                	<div class="col-md-7">
                    	<select class="form-control" name="id_barang" id="nama_barang">
                          	<option value="">----- Nama Barang Yang diambil -----</option>
                            	<?php
									foreach($DaftarBarang as $dri){
										echo '<option value="'.$dri['id_barang'].'">'.$dri['nama_barang'].'</option>';
									}
								?>
                            	
                          </select>

                    </div>
                </div>
                <br>

                
                                
                <div class="form-group">
                	<label for="jumlah pesanan" class="col-md-3"> Jumlah Pengambilan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="jumlah pengambilan" placeholder="Jumlah Pengambilan Barang dalam angka" name="jumlah_pengambilan">
                    </div>
                </div>
                <br>

                
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		<a href="bagian.php">
                    		<input type="submit" class="btn btn-primary" name="simpan" value="simpan"> 
                        	<input type="reset" class="btn btn-danger" name="batal" value="batal">
                    	</a>
                    </div>
                </div>
    		</form>
        </div>
    </div>
    
    <!-- akhir form -->

<style>
	.ui-autocomplete {
		padding: 0;
		list-style: none;
		background-color: #fff;
		width: 218px;
		border: 1px solid #B0BECA;
		max-height: 350px;
		overflow-x: hidden;
	}
	.ui-autocomplete .ui-menu-item {
		border-top: 1px solid #B0BECA;
		display: block;
		padding: 4px 6px;
		color: #353D44;
		cursor: pointer;
	}
	.ui-autocomplete .ui-menu-item:first-child {
		border-top: none;
	}
	.ui-autocomplete .ui-menu-item.ui-state-focus {
		background-color: #D5E5F4;
		color: #161A1C;
	}
</style>