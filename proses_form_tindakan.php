<?php 
$koneksi=mysqli_connect("localhost","root","","db_sisteminformasiklinik");


$id_pasien=$_POST[id_pasien];
$tanggal=$_POST[tanggal];
$nama_tindakan=$_POST[nama_tindakan];
$harga_obat = $_POST[harga_obat];
$harga_tindakan=$_POST[harga_tindakan];
$tagihan = $harga_obat+$harga_tindakan;

{
if(isset($_POST['Submit']))
	{
		
		$q=mysqli_query($koneksi,"INSERT INTO pembayaran (id_pasien,tanggal,nama_tindakan,harga_obat,harga_tindakan,tagihan)
		VALUES('$id_pasien','$tanggal','$nama_tindakan','$harga_obat','$harga_tindakan','$tagihan')");

		if($q)
		{
			header('location:index.php?p=home');
		}
	}
}
?>