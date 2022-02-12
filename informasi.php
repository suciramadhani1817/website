
<div class="col-sm-6">
    <h1>Informasi Pembayaran Tagihan Pasien</h1>
</div>

<table class="table table-striped table-bordered">
<tr>
  <th>No</th>
  <th>ID Pembayaran</th>
  <th>ID Pasien</th>
  <th>Tanggal</th>
  <th>Tindakan</th>
  <th>Harga Obat</th>
  <th>Harga Tindakan</th>
  <th>Tagihan</th>
</tr>
<?php
$koneksi=mysqli_connect("localhost","root","","db_sisteminformasiklinik"); 
$ambil=mysqli_query($koneksi,"SELECT * FROM pembayaran");
$no=1;
while ($data=mysqli_fetch_array($ambil)) {
?>
<tr>
  <td><?php echo $no;?></td>
  <td><?php echo $data['id_pembayaran']?></td>
  <td><?php echo $data['id_pasien']?></td>
  <td><?php echo $data['tanggal']?></td>
  <td><?php echo $data['nama_tindakan']?></td>
  <td><?php echo $data['harga_obat']?></td>
  <td><?php echo $data['harga_tindakan']?></td>
  <td><?php echo $data['tagihan']?></td>
</tr>
<?php
$no++;
}
?>
</table>
