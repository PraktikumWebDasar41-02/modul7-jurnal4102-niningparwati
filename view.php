<?php 
$conn = mysqli_connect('localhost','root','','modul7');
if (isset($_GET['submit'])) {
	$nama = $_GET['nama'];
	$nim = $_GET['nim'];
	$tanggal = $_GET['tanggal'];
	$jenis = $_GET['jk'];
	$fakultas = $_GETT['fakultas'];
	$asal = $_GET['asal'];
	$moto = $_GET['moto'];
}
$select = mysqli_query($conn, "SELECT * FROM data_mahasiswa");
while($tampil=mysqli_fetch_assoc($select)) {

	echo "TAMPIL DATA MAHASISWA TERBARU <br><br>";
	echo "Nama : ".$tampil['nama']."<br>";
	echo "NIM : ".$tampil['nim']."<br>";
	echo "Tanggal Lahir : ".$tampil['tanggal']."<br>";
	echo "Jenis Kelamin : ".$tampil['jenis']."<br>";
	echo "Program Study : ".$tampil['prodi']."<br>";
	echo "Fakultas : ".$tampil['fakultas']."<br>";
	echo "Asal : ".$tampil['asal']."<br>";
	echo "Moto hidup : ".$tampil['moto']."<br>";
	echo "<br>";
	echo "";
}
 ?>
 <form action="form.php">
 	<input type="submit" name="hapus" value="HAPUS">
 </form>
 <form action="form.php">
 	<input type="submit" name="input" value="INPUT">
 </form>