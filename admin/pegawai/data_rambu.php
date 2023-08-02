<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_data_rambu WHERE ";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Rambu</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-rambu" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data Rambu</a>
				</div>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Tempat Rambu</th>
						<th>Kategori Rambu</th>
						<th>Nama Rambu</th>
						<th>Titik Lokasi</th>
						<th>Foto</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

			<?php
              
			  $sql = $koneksi->query("SELECT * from tb_data_rambu");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $data['no']; ?>
						</td>
						<td>
							<?php echo $data['tempat_rambu']; ?>
						</td>
						<td>
							<?php echo $data['kategori_rambu']; ?>
						</td>
						<td>
							<?php echo $data['nama_rambu']; ?>
						</td>
						<td>
							<?php echo $data['titik_lokasi']; ?>
						</td>
						<td align="center">
							<img src="foto/<?php echo $data['foto']; ?>" width="70px" />
						</td>
						<td>
							<a href="?page=view-rambu&kode=<?php echo $data['no']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-rambu&kode=<?php echo $data['no']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-rambu&kode=<?php echo $data['no']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->