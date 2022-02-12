<?php 
$koneksi=mysqli_connect("localhost","root","","db_sisteminformasiklinik");

{
if(isset($_POST['Submit']))
	{
		
		$q=mysqli_query($koneksi,"INSERT INTO pasien (id_wilayah,nama_pasien,usia,jenis_kelamin,no_telp,keluhan)
		VALUES('$_POST[id_wilayah]','$_POST[nama_pasien]','$_POST[usia]','$_POST[jenis_kelamin]','$_POST[no_telp]','$_POST[keluhan]')");

		if($q)
		{
			header('location:index.php?p=home');
		}
	}
}
?>