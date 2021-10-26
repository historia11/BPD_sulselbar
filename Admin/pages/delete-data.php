<?php 

include '../../koneksi/koneksi.php';

$nik=$_GET['nik'];
$sql=mysqli_query($koneksi,"DELETE FROM data WHERE nik='$nik'");
if($sql){
	echo '<script> alert("Data berhasil dihapus."); javascript:history.back(); </script>';
}else{
	echo '<script> alert("Data Gagal dihapus."); javascript:history.back(); </script>';	
}
?>