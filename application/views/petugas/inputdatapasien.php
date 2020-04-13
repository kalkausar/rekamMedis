<div class="box-header with-border">
					<h3 class="box-title">Input Data Pasien</h3>
				</div>			
                <!-- /.box-header -->
                <div class="box-body">
								<form action="<?php echo base_url('admin/tambah_data');?>" enctype="multipart/form-data" method="post" >
									<div class="form-group">
										<label for="formGroupExampleInput">Judul</label>
										<input type="text" class="form-control" name="judul" placeholder="Ini adalah Blog Pertama Saya">
									</div>
									<div class="form-group">
										<label for="formGroupExampleInput2">Gambar</label>
										<input type="file" id="gambar" name="gambar" class="form-control">
									</div>
									<div class="form-group">
										<label for="formGroupExampleInput2">Isi</label>
										<textarea type="text" class="form-control" id="ckeditor" name="isi" ></textarea>
										<script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
										<script>
										var ckeditor = CKEDITOR.replace('isi');
										CKEDITOR.disableAutoInline = true;
										CKEDITOR.inline('editable')
										</script>
									</div>
									<button class="btn btn-primary" type="submit" id="">Submit</a></button>
									</form>
				</div>
				<!-- ./box-body -->