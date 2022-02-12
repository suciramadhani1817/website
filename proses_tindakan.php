 <?php 
$koneksi=mysqli_connect("localhost","root","","db_sisteminformasiklinik");
if($_GET['proses']=='hapus')
{
	
	$hapus=mysqli_query($koneksi,"DELETE FROM tindakan WHERE id_tindakan='$_GET[id]'");
	header('location:index.php?p=tindakan');
}

if($_GET['proses']=='entri')
{
	if(isset($_POST['Submit']))
	{
		
		$q=mysqli_query($koneksi,"INSERT INTO tindakan (nama_tindakan)
		VALUES('$_POST[nama_tindakan]')");

		if($q)
		{
			header('location:index.php?p=tindakan');
		}
	}
}
if($_GET['proses']=='update')
{
	
	if(isset($_POST['Submit']))
	{
		
		$q=mysqli_query($koneksi,"UPDATE tindakan SET
		
		nama_tindakan ='$_POST[nama_tindakan]' WHERE id_tindakan='$_GET[id]'");
		if($q)
		{
			header('location:index.php?p=tindakan');
		}
	}
}
?>