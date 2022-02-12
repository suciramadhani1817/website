 <?php
 $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
 switch ($aksi) {
 case 'list' :
 ?>

<div class="col-sm-6">
            <h1>Data Obat</h1>
			</div>

<a href="?p=obat&aksi=entri" class="btn btn-success">Tambah Data</a> <br>
<table class="table table-striped table-bordered">
<tr>
  <th>ID Obat</th>
  <th>Nama Obat</th>
  <th>Harga Obat</th>
  <th>Aksi</th>
</tr>
<?php
$koneksi=mysqli_connect("localhost","root","","db_sisteminformasiklinik"); 
$ambil=mysqli_query($koneksi,"SELECT * FROM obat");
$no=1;
while ($data=mysqli_fetch_array($ambil)) {
?>
<tr>
  <td><?php echo $no;?></td>
  <td><?php echo $data['nama_obat']?></td>
  <td><?php echo $data['harga_obat']?></td>
  <td align="center">
  <a href="?p=obat&aksi=edit&id=<?php echo $data['id_obat']?>" class="btn btn-primary">
  <i class="fas fa-pencil-alt"></i>Edit</a>
  <a href="proses_obat.php?proses=hapus&id=<?php echo $data['id_obat']?>" class="btn btn-danger">
  <i class="fas fa-trash"></i>Hapus</a>

  </td>
</tr>
<?php
$no++;
}
?>
</table>
  
 <?php
 break;
 case 'entri' :
 ?>
 <h1>Entri Data Obat</h1>
<form action="proses_obat.php?proses=entri" method="post"><br><br><br>  

<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Obat</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="nama_obat" required>
    </div> 
  </div>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Harga Obat</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="harga_obat" required>
    </div> 
  </div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-8">
      <input type="submit" class="btn btn-primary" name="Submit" value="Simpan">
    </div> 
  </div>

</form>
 
 <?php
 break;
 case 'edit' :
 ?>
 <h1>Edit Data Obat</h1>
<?php
$koneksi=mysqli_connect("localhost","root","","db_sisteminformasiklinik"); 
$q=mysqli_query($koneksi,"SELECT * FROM obat WHERE id_obat='$_GET[id]'");
$data=mysqli_fetch_array($q);
?>
<form action="proses_obat.php?proses=update&id=<?= $data['id_obat'] ?>" method="post">
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Obat</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="nama_obat" value="<?= $data['nama_obat'] ?>" >
    </div> 
  </div>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Harga Obat</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="harga_obat" value="<?= $data['harga_obat'] ?>" >
    </div> 
  </div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-8">
      <input type="submit" class="btn btn-primary" name="Submit" value="Update">
    </div> 
  </div>
</form>
 <?php
 break;
 }
 ?>
 