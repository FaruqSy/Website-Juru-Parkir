<?php
	include "../inc/koneksi.php";
	
	$no = $_GET['no'];

	$sql_cek = "SELECT * FROM tb_profil";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
	{
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA RAMBU</title>
</head>

<body>
	<center>

		<h2>
			<?php echo $data_cek['nama_profil']; ?>
		</h2>
		<h3>
			<?php echo $data_cek['alamat']; ?>
			<hr / size="1px" color="black">

			<?php
			}

			$sql_tampil = "select * from tb_data_rambu";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u></u>
		</h4>
	</center>

	<table border="1" cellspacing="0" style="width: 85%" align="center">
		<tbody>
			<tr>
				<td>NO</td>
				<td>:</td>
				<td>
					<?php echo $data['no']; ?>
				</td>
				<td rowspan="8" align="center">
					<img src="../foto/<?php echo $data['foto']; ?>" width="150px" />
				</td>
			</tr>
			<tr>
				<td>Tempat Rambu</td>
				<td>:</td>
				<td>
					<?php echo $data['tempat_rambu']; ?>
				</td>
			</tr>
			<tr>
				<td>Kategori Rambu</td>
				<td>:</td>
				<td>
					<?php echo $data['kategori_rambu']; ?>
				</td>
			</tr>
			<tr>
				<td>Nama Rambu</td>
				<td>:</td>
				<td>
					<?php echo $data['nama_rambu']; ?>
				</td>
			</tr>
			<tr>
				<td>Titik Lokasi</td>
				<td>:</td>
				<td>
					<?php echo $data['titik_lokasi']; ?>
				</td>
			</tr>
			<br>
			<?php } ?>
		</tbody>
	</table>


	<script>
		window.print();
	</script>

</body>
</html>