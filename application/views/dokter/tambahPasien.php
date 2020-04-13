<div class="box-header with-border">
	<h3 class="box-title">Tambah Data Pasien</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
	<form action="<?php echo base_url('dashboard/tambahPasien_data');?>" enctype="multipart/form-data" method="post">
		<div class="form-group">
			<label for="formGroupExampleInput">Pasien</label>
			<select class="form-control" id="exampleFormControlSelect1" name="id_user">
				<?php foreach($user->result() as $row): ?>
				<option value="<?php echo $row->id; ?>"><?php echo $row->nama; ?></option>
			<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Riwayat</label>
			<input type="text" class="form-control" name="riwayat" placeholder="Penyakit keturunan">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Golongan Darah</label>
			<select class="form-control" id="exampleFormControlSelect1" name="gol_darah">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="AB">AB</option>
				<option value="O">O</option>
			</select>
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Pekerjaan</label>
			<input type="text" class="form-control" name="pekerjaan" placeholder="pekerjaan">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Status</label>
			<select class="form-control" id="exampleFormControlSelect1" name="status">
				<option value="1">Menikah</option>
				<option value="2">Belum Menikah</option>
				<option value="3">Cerai</option>
			</select>
		</div>
		<button class="btn btn-primary" type="submit" id="">Submit</a></button>
	</form>
</div>
<!-- ./box-body -->
