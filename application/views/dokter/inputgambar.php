<div class="box-header with-border">
	<h3 class="box-title">Input Hasil Citra</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
	<?php if ($this->session->flashdata('berhasil')){ ?>
	<div class="alert alert-success">
		<strong>Berhasil!</strong> Menambahkan data diagnosa
	</div>
	<?php } ?>
	<form action="<?php echo base_url('dashboard/tambah_rekamData');?>" enctype="multipart/form-data" method="post">
		<div class="form-group">
			<label for="formGroupExampleInput">Pasien</label>
			<select class="form-control" id="exampleFormControlSelect1" name="id_user">
				<?php foreach($user->result() as $row): ?>
				<option value="<?php echo $row->id; ?>"><?php echo $row->nama; ?></option>
			<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2">Citra 1: Saliva Input</label>
			<input type="file" id="gambar" name="gambar" class="form-control">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2">Citra 2: Proccessing</label>
			<input type="file" id="gambar2" name="gambar2" class="form-control">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2">Citra 3: Result</label>
			<input type="file" id="gambar2" name="gambar3" class="form-control">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Tanggal Konsultasi</label>
			<input type="date" class="form-control" name="tgl_konsul">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2">Diagnosa</label>
			<textarea type="text" class="form-control" id="ckeditor" name="diagnosa"></textarea>
			<script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
			<script>
				var ckeditor = CKEDITOR.replace('diagnosa');
				CKEDITOR.disableAutoInline = true;
				CKEDITOR.inline('editable')
			</script>
		</div>
		<button class="btn btn-primary" type="submit" id="">Submit</a></button>
	</form>
</div>
<!-- ./box-body -->
