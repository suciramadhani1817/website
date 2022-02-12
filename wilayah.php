 <?php
 $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
 switch ($aksi) {
 case 'list' :
 ?>

<div class="col-sm-6">
            <h1>Data Wilayah</h1>
			</div>

<a href="?p=wilayah&aksi=entri" class="btn btn-success">Tambah Data</a> <br>
<table class="table table-striped table-bordered">
<tr>
  <th>ID Wilayah</th>
  <th>Nama Wilayah</th>
  <th>Aksi</th>
</tr>
<?php
$koneksi=mysqli_connect("localhost","root","","db_sisteminformasiklinik"); 
$ambil=mysqli_query($koneksi,"SELECT * FROM wilayah");
$no=1;
while ($data=mysqli_fetch_array($ambil)) {
?>
<tr>
  <td><?php echo $no;?></td>
  <td><?php echo $data['nama_wilayah']?></td>
  <td align="center">
  <a href="?p=wilayah&aksi=edit&id=<?php echo $data['id_wilayah']?>" class="btn btn-primary">
  <i class="fas fa-pencil-alt"></i>Edit</a>
  <a href="proses_wilayah.php?proses=hapus&id=<?php echo $data['id_wilayah']?>" class="btn btn-danger">
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
 <h1>Entri Data Wilayah</h1>
<form action="proses_wilayah.php?proses=entri" method="post"><br><br><br>  

<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Wilayah</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="nama_wilayah" required>
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
 <h1>Edit Data Wilayah</h1>
<?php
$koneksi=mysqli_connect("localhost","root","","db_sisteminformasiklinik"); 
$q=mysqli_query($koneksi,"SELECT * FROM wilayah WHERE id_wilayah='$_GET[id]'");
$data=mysqli_fetch_array($q);
?>
<form action="proses_wilayah.php?proses=update&id=<?= $data['id_wilayah'] ?>" method="post">
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Wilayah</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="nama_wilayah" value="<?= $data['nama_wilayah'] ?>" >
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
 