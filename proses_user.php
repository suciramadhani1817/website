<?php
$koneksi=mysqli_connect("localhost","root","","db_sisteminformasiklinik"); 
if ($_GET['proses']=='hapus') {
$hapus=mysqli_query($koneksi,"DELETE FROM user WHERE no_user='$_GET[id]'");
header('location:index.php?p=user');

}
if ($_GET['proses']=='entri') {
  if (isset($_POST['Submit'])) {
  	$pass=md5($_POST['password']);

    $q=mysqli_query($koneksi,"INSERT INTO user (no_user,username,password,level) VALUES('$_POST[no_user]','$_POST[username]','$pass','$_POST[level]')");
  if ($q) 
    header('location:index.php?p=user');
  }
}

if ($_GET['proses']=='update') {
if (isset($_POST['Submit'])) {
$q=mysqli_query($koneksi,"UPDATE user SET 
    username      ='$_POST[username]',
    password       ='$_POST[password]'
    level          ='$_POST[level]' WHERE no_user='$_GET[id]'");
if ($q) 
  header('location:index.php?p=user');
}

}
?>