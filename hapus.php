<?php 
$conn = mysqli_connect('localhost','root','','modul7');

$delete = mysqli_query($conn, "DELETE FROM data_mahasiswa WHERE nim=$nim");
if (mysqli_affected_rows($delete)>0) {
	echo "Data telah terhapus";
	header("Location:halamanawal.php")
}
 ?>