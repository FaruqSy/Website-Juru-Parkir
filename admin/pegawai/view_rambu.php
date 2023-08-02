<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_data_rambu WHERE no='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Rambu</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>NO</b>
							</td>
							<td>:
								<?php echo $data_cek['no']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tempat Rambu (Jalan)</b>
							</td>
							<td>:
								<?php echo $data_cek['tempat_rambu']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kategori Rambu</b>
							</td>
							<td>:
								<?php echo $data_cek['kategori_rambu']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Rambu</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_rambu']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Titik Lokasi</b>
							</td>
							<td>:
								<?php echo $data_cek['titik_lokasi']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-rambu" class="btn btn-warning">Kembali</a>

					<a href="./report/cetak-rambu.php?no=<?php echo $data_cek['no']; ?>" target=" _blank"
					 title="Cetak Data Rambu" class="btn btn-primary">Print</a>
					 
					<a href="./report/cetak-pdf-rambu.php?no=<?php echo $data_cek['no']; ?>" target=" _blank"
					 title="Cetak Data Rambu" class="btn btn-success">Print pdf all files</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Foto Rambu
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="foto/<?php echo $data_cek['foto']; ?>" width="200px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['no']; ?>
					-
					<?php echo $data_cek['tempat_rambu']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>