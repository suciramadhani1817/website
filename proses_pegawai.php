 <?php 
$koneksi=mysqli_connect("localhost","root","","db_sisteminformasiklinik");
if($_GET['proses']=='hapus')
{
	
	$hapus=mysqli_query($koneksi,"DELETE FROM pegawai WHERE id_pegawai='$_GET[id]'");
	header('location:index.php?p=pegawai');
}

if($_GET['proses']=='entri')
{
	if(isset($_POST['Submit']))
	{
		
		$q=mysqli_query($koneksi,"INSERT INTO pegawai (nama_pegawai)
		VALUES('$_POST[nama_pegawai]')");

		if($q)
		{
			header('location:index.php?p=pegawai');
		}
	}
}
if($_GET['proses']=='update')
{
	
	if(isset($_POST['Submit']))
	{
		
		$q=mysqli_query($koneksi,"UPDATE pegawai SET
		
		nama_pegawai ='$_POST[nama_pegawai]' WHERE id_pegawai='$_GET[id]'");
		if($q)
		{
			header('location:index.php?p=pegawai');
		}
	}
}
?>