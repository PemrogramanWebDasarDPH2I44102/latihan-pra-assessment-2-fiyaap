<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
</head>
<body>
	<center>
		<h1>Create Penghuni</h1><br>

		<form method="POST">
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>

				<tr>
					<td>Unit</td>
					<td>:</td>
					<td><input type="text" name="unit"></td>
				</tr>

				<tr>
					<td>No KTP</td>
					<td>:</td>
					<td><input type="text" name="noKTP"></td>
				</tr>

				<tr>
					<td align="center" colspan="3">
						<br><input type="submit" name="submit" name="submit">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		$nama 		= $_POST['nama'];
		$unit		= $_POST['unit'];
		$noKTP 		= $_POST['noKTP'];

		include "db.php";

		$query = mysqli_query($conn,"INSERT INTO paket(isi_paket, p_sasaran, t_datang, k_nerima) VALUES('$isi_paket','$p_sasaran','$t_datang','$k_nerima')");

		if ($query) {

			echo

			"<script>

					alert('Data Berhasil di Tambah');

					location='list.php';

			</script>";

		}else{

			echo "Data Gagal di Tambah";

		}
	}
?>