<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Rambu</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no" name="no" placeholder="No" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Rambu (Jalan)</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tempat_rambu" name="tempat_rambu" placeholder="Tempat Rambu (Jalan)" required>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategori Rambu</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kategori_rambu" name="kategori_rambu" placeholder="Kategori Rambu" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Rambu</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_rambu" name="nama_rambu" placeholder="Nama Rambu" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Titik Lokasi</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="titik_lokasi" name="titik_lokasi" placeholder="Titik Lokasi" required>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto Rambu</label>
				<div class="col-sm-6">
					<input type="file" id="foto" name="foto">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-rambu" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO tb_data_rambu (no, tempat_rambu, kategori_rambu, nama_rambu, titik_lokasi, foto) VALUES (
            '".$_POST['no']."',
			'".$_POST['tempat_rambu']."',
			'".$_POST['kategori_rambu']."',
			'".$_POST['nama_rambu']."',
			'".$_POST['titik_lokasi']."',
            '".$nama_file."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-rambu';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-rambu';
          }
      })</script>";
	}
	}elseif(empty($sumber)){
		echo "<script>
		Swal.fire({title: 'Gagal, Foto Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = 'index.php?page=add-rambu';
			}
		})</script>";
	}
	}
     //selesai proses simpan data