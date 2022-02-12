 <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tindakan Pasien</h3>
    </div>
	  <!-- /.card-header -->
	  <!-- form start -->
		
		<form action="proses_form_tindakan.php" method="post">
			<div class="card-body">
				<div class="form-group">
					<label for="InputIDPasien">ID Pasien</label>
						<div class="form-group">
							<select name="id_pasien" class="form-control">
								<option>--Pilihan--</option>
								<?php
								include 'koneksi.php';
								$pasien=mysqli_query($koneksi, "SELECT * FROM pasien");
								while($data_pasien=mysqli_fetch_array($pasien))
								{
								 echo "<option value=$data_pasien[id_pasien]>$data_pasien[id_pasien] </option>";
								}
								?>
							</select>
						</div>
					</div>
			  
				<div class="form-group">
					<label for="inputTanggal">Tanggal</label>
					<div class="form-group">
						<input type="date" class="form-control" name="tanggal" placeholder="tanggal" required="">
					</div>
				</div>
		  
				<div class="form-group">
					<label for="inputNamaTindakan">Tindakan</label>
						<div class="form-group">
								<select name="nama_tindakan" class="form-control">
									<option>--Pilihan--</option>
									<?php
									include 'koneksi.php';
									$tindakan=mysqli_query($koneksi, "SELECT * FROM tindakan");
									while($data_tindakan=mysqli_fetch_array($tindsakan))
									{
									 echo "<option value=$data_tindakan[nama_tindakan]>$data_tindakan[nama_tindakan] </option>";
									}
									?>
								</select>
							</div>
				</div>
				
				<div class="form-group">
					<label for="inputHarga">Harga Obat</label>
					<div class="form-group">
						<input type="text" class="form-control" name="harga_obat" placeholder="Rp." required="">
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputHarga">Harga Tindakan</label>
					<div class="form-group">
						<input type="text" class="form-control" name="harga_tindakan" placeholder="Rp." required="">
					</div>
				</div>
	
			</div>
			<!-- /.card-body -->

			<div class="card-footer">
			  <label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-8">
					<input type="submit" class="btn btn-primary" name="Submit" value="Simpan">
				</div> 
			</div>
			
			
		</form>
</div>
            <!-- /.card -->