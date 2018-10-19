<!DOCTYPE html>
<html>
<head>
	<title>Form Pendataan Mahasiswa</title>
</head>
<body>
	<form method="GET" action="view.php">
		<table>
			<tr>
				<td colspan="2" align="center">FORM PENDATAAN MAHASISWA</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value=""></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" value=""></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal" value=""></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jk">
						<option name="jk" value="Laki-Laki">Laki-Laki</option>
						<option name="jk" value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Program Study</td>
				<td>
					<select name="prodi">
						<option name="prodi" value="MI">MI</option>
						<option name="prodi" value="IF">IF</option>
						<option name="prodi" value="TK">TK</option>
						<option name="prodi" value="SM">SM</option>
						<option name="prodi" value="MBTI">MBTI</option>
						<option name="prodi" value="DKV">DKV</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>
					<select name="fakultas">
					<option type="radio" name="fakultas" value="FIT">FIT
					<option type="radio" name="fakultas" value="FKB">FKB
					<option type="radio" name="fakultas" value="FEB">FEB
					<option type="radio" name="fakultas" value="FIK">FIK
					<option type="radio" name="fakultas" value="FIF">FIF
					<option type="radio" name="fakultas" value="FTE">FTE
					<option type="radio" name="fakultas" value="FRI">FRI
					</select>
				</td>
			</tr>
			<tr>
				<td>Asal</td>
				<td><input type="text" name="asal" value=""></td>
			</tr>
			<tr>
				<td>Moto hidup</td>
				<td>
					<textarea name="moto" value=""></textarea>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit" value="SUBMIT"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php 
$conn = mysqli_connect('localhost','root','','modul7');
if (!$conn) {
	echo "gagal tersambung <br>";
}else{
	echo "tersambung <br>";
}
if (isset($_GET['submit'])) {
	$nama = $_GET['nama'];
	$nim = $_GET['nim'];
	$tanggal = $_GET['tanggal'];
	$jenis = $_GET['jk'];
	$prodi =$_GET['prodi'];
	$fakultas = $_GET['fakultas'];
	$asal = $_GET['asal'];
	$moto = $_GET['moto'];

	$query = mysqli_query($conn, "INSERT INTO data_mahasiswa VALUES('$nim','$nama','$tanggal','$jenis','$prodi','$fakultas','$asal','$moto')");
	if ($query) {
		echo "berhasil input";
	}
	else{
		echo "gagal input";
	}
}
 ?>