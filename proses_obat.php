 <?php 
$koneksi=mysqli_connect("localhost","root","","db_sisteminformasiklinik");
if($_GET['proses']=='hapus')
{
	
	$hapus=mysqli_query($koneksi,"DELETE FROM obat WHERE id_obat='$_GET[id]'");
	header('location:index.php?p=obat');
}

if($_GET['proses']=='entri')
{
	if(isset($_POST['Submit']))
	{
		
		$q=mysqli_query($koneksi,"INSERT INTO obat (nama_obat,harga_obat)
		VALUES('$_POST[nama_obat]','$_POST[harga_obat]')");

		if($q)
		{
			header('location:index.php?p=obat');
		}
	}
}
if($_GET['proses']=='update')
{
	
	if(isset($_POST['Submit']))
	{
		
		$q=mysqli_query($koneksi,"UPDATE obat SET
		
		nama_obat	='$_POST[nama_obat]',
		harga_obat	='$_POST[harga_obat]'
		WHERE id_obat='$_GET[id]'");
		if($q)
		{
			header('location:index.php?p=obat');
		}
	}
}
?>