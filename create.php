<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
</head>
<body>
	<center>
		<h1>Create Packet</h1><br>

		<form method="POST">
			<table>
				<tr>
					<td>Isi Paket</td>
					<td>:</td>
					<td><input type="text" name="isi_paket"></td>
				</tr>

				<tr>
					<td>Sasaran Paket</td>
					<td>:</td>
					<td>
						<select name="p_sasaran">
							<option value="">--------</option>
							<option value="Fiya">Fiya</option>
							<option value="Fitri">Fitri</option>
							<option value="Fany">Fany</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Tanggal Datang</td>
					<td>:</td>
					<td><input type="date" name="t_datang" value="<?php echo 'date(now())'; ?>"></td>
				</tr>

				<tr>
					<td>Penerima Paket</td>
					<td>:</td>
					<td><input type="text" name="k_nerima"></td>
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
		$isi_paket 		= $_POST['isi_paket'];
		$p_sasaran		= $_POST['p_sasaran'];
		$t_datang 		= $_POST['t_datang'];
		$k_nerima		= $_POST['k_nerima'];

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