<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_data_rambu WHERE no='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Rambu</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">no</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no" name="no" placeholder="NO" required>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Rambu</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tempat_rambu" name="tempat_rambu" placeholder="Tempat Rambu" required>
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
					<img src="foto/<?php echo $data_cek['foto']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Foto</label>
				<div class="col-sm-6">
					<input type="file" id="foto" name="foto">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-rambu" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['foto'];
            if (file_exists("foto/$foto")){
            unlink("foto/$foto");}

        $sql_ubah = "UPDATE tb_data_rambu SET
			no='".$_POST['no']."',
			tempat_rambu='".$_POST['tempat_rambu']."',
			kategori_rambu='".$_POST['kategori_rambu']."',
			nama_rambu='".$_POST['nama_rambu']."',
			titik_lokasi='".$_POST['titik_lokasi']."',
			foto='".$nama_file."'		
            WHERE no='".$_POST['no']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE tb_data_rambu SET
			no='".$_POST['no']."',
			tempat_rambu='".$_POST['tempat_rambu']."',
			kategori_rambu='".$_POST['kategori_rambu']."',
			nama_rambu='".$_POST['nama_rambu']."',
			titik_lokasi='".$_POST['titik_lokasi']."',
			foto='".$nama_file."'		
            WHERE no='".$_POST['no']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-rambu';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-rambu';
            }
        })</script>";
    }
}

