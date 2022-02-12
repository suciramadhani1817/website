 <?php 
$koneksi=mysqli_connect("localhost","root","","db_sisteminformasiklinik");
if($_GET['proses']=='hapus')
{
	
	$hapus=mysqli_query($koneksi,"DELETE FROM wilayah WHERE id_wilayah='$_GET[id]'");
	header('location:index.php?p=wilayah');
}

if($_GET['proses']=='entri')
{
	if(isset($_POST['Submit']))
	{
		
		$q=mysqli_query($koneksi,"INSERT INTO wilayah (nama_wilayah)
		VALUES('$_POST[nama_wilayah]')");

		if($q)
		{
			header('location:index.php?p=wilayah');
		}
	}
}
if($_GET['proses']=='update')
{
	
	if(isset($_POST['Submit']))
	{
		
		$q=mysqli_query($koneksi,"UPDATE wilayah SET
		
		nama_wilayah	='$_POST[nama_wilayah]' WHERE id_wilayah='$_GET[id]'");
		if($q)
		{
			header('location:index.php?p=wilayah');
		}
	}
}
?>