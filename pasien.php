 <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Pendaftaran Pasien</h3>
    </div>
	  <!-- /.card-header -->
	  <!-- form start -->
		
		<form action="proses_pasien.php" method="post">
			<div class="card-body">
				<div class="form-group">
					<label for="InputIDWilayah">ID Wilayah</label>
						<div class="form-group">
							<select name="id_wilayah" class="form-control">
								<option>--Pilihan--</option>
								<?php
								include 'koneksi.php';
								$wilayah=mysqli_query($koneksi, "SELECT * FROM wilayah");
								while($data_wilayah=mysqli_fetch_array($wilayah))
								{
								 echo "<option value=$data_wilayah[id_wilayah]>$data_wilayah[id_wilayah] </option>";
								}
								?>
							</select>
						</div>
					</div>
			  
				<div class="form-group">
					<label for="inputNamaPasien">Nama Pasien</label>
					<input type="text" class="form-control" name="nama_pasien" required>
				</div>
		  
				<div class="form-group">
					<label for="inputNamaPasien">Usia</label>
					<input type="text" class="form-control" name="usia" required>
				</div>
		  
				<div class="form-group">
					<label for="inputJenisKelamin">Jenis Kelamin</label>
						<div class="form-group">
							<select name="jenis_kelamin" class="form-control">
								<option>--Pilihan--</option>
								<option>perempuan</option>
								<option>laki-laki</option>
							</select>
						</div>
				</div>
			
				<div class="form-group">
					<label for="inputNamaPasien">No Telepon</label>
					<input type="number" class="form-control" name="no_telp" required>
				</div>
				
				<div class="form-group">
					<label for="inputNamaPasien">Keluhan</label>
					<input type="text" class="form-control" name="keluhan" required>
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