<?php 
$conn = mysqli_connect('localhost','root','','modul7');
$select = mysqli_query($conn, "SELECT * FROM data_mahasiswa");
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$tanggal = $_POST['tanggal'];
	$jenis = $_POST['jk'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];
}
while($tampil=mysqli_fetch_assoc($select)) {
	echo "DATA MAHASISWA <br><br>";
	echo "Nama : ".$tampil['nama']."<br>";
	echo "NIM : ".$tampil['nim']."<br>";
	echo "Tanggal Lahir : ".$tampil['tanggal']."<br>";
	echo "Jenis Kelamin : ".$tampil['jenis']."<br>";
	echo "Program Study : ".$tampil['prodi']."<br>";
	echo "Fakultas : ".$tampil['fakultas']."<br>";
	echo "Asal : ".$tampil['asal']."<br>";
	echo "Moto hidup : ".$tampil['moto']."<br>";
	echo "<br>";
}
 ?>
 <form action="form.php">
 	<input type="submit" name="input" value="INPUT">
 </form>