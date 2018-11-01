<?php
	include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
</head>
<body>
	<center>
		<h1>List Packet</h1>

		<form method="POST">
			<table border="1">
				<tr>
					<td>Isi Packet</td>
					<td>Sasaran</td>
					<td>Tanggal Datang</td>
					<td>Penerima Paket</td>
						<?php
							include("db.php");
							@$search = $_POST['search'];
							$query   = "SELECT isi_paket, p_sasaran, t_datang, k_nerima FROM paket WHERE k_nerima LIKE %search%";
							$result	 = mysqli_query($conn, $query);

								if (mysqli_num_rows($result)>0) {
									while($row = mysqli_fetch_assoc($result)){
						?>
				</tr>

				<tr>
					<td>
						<?php
							echo $row['isi_paket'];
						?>
					</td>

					<td>
						<?php
							echo $row['p_sasaran'];
						?>
					</td>

					<td>
						<?php
							echo $row['t_datang'];
						?>
					</td>

					<td>
						<?php
							echo $row['k_nerima'];
						?>
					</td>

					<!-- <td>
						<a href="hapus.php?nama=<?php echo $row['nama']; ?>">Hapus</a> | <a href="detail.php?nama=<?php echo $row['nama'] ?>">Detail<a/>
					</td> -->
				</tr>
				
				<?php
					}
					
					}else{
						echo "0 Result";
					}
							?>
						}
					}
				?>
			</table>
		</form>

		<form action="list.php" method="POST">
			<table>
				<tr>
					<td>Cari Penerima</td>
					<td>:</td>
					<td><input type="text" name="search"></td>
					<td><input type="submit" name="submit" value="cari"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>