<?php foreach($pasien->result() as $row): ?>
<div class="box-header with-border">
	<h3 class="box-title">Edit Data Pasien</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
	<form action="<?php echo base_url('dashboard/tambahPasien_data');?>" enctype="multipart/form-data" method="post">
		<div class="form-group">
			<label for="formGroupExampleInput">Riwayat</label>
			<input type="text" class="form-control" name="riwayat" value="<?php echo $row->riwayat;?>">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Golongan Darah</label>
			<select class="form-control" id="exampleFormControlSelect1" name="gol_darah">
				<option value="A" <?php if($row->gol_darah == 'A') echo"selected"; ?> >A</option>
				<option value="B" <?php if($row->gol_darah == 'B') echo"selected"; ?> >B</option>
				<option value="AB" <?php if($row->gol_darah == 'AB') echo"selected"; ?> >AB</option>
				<option value="O" <?php if($row->gol_darah == 'O') echo"selected"; ?> >O</option>
			</select>
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Pekerjaan</label>
			<input type="text" class="form-control" name="pekerjaan" value="<?php echo $row->pekerjaan;?>">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Status</label>
			<select class="form-control" id="exampleFormControlSelect1" name="status">
				<option value="1"<?php if($row->status == 1) echo"selected"; ?> >Menikah</option>
				<option value="2"<?php if($row->status == 2) echo"selected"; ?> >Belum Menikah</option>
				<option value="3"<?php if($row->status == 3) echo"selected"; ?> >Cerai</option>
			</select>
		</div>
		<button class="btn btn-primary" type="submit" id="">Simpan</a></button>
	</form>
</div>
<?php endforeach; ?>
<!-- ./box-body -->
