<?php foreach ($news->result() as $row): ?>
<div class="box-header with-border">
					<h3 class="box-title">Add Content</h3>
				</div>
                <!-- /.box-header -->
                <div class="box-body">
								<form action="<?php echo base_url('dashboard/update_news');?>" enctype="multipart/form-data" method="post" >
									<input type="hidden" class="form-control" name="id" value="<?php echo $row->id;?>">
									<div class="form-group">
										<label for="formGroupExampleInput">Judul</label>
										<input type="text" class="form-control" name="judul" value="<?php echo $row->judul;?>">
									</div>
									<div class="form-group">
										<label for="formGroupExampleInput2">Gambar</label>
										<input type="hidden" name="old_image" value="<?php echo $row->gambar;?>"/>
										<input type="file" id="gambar" name="gambar" class="form-control" value="<?php echo $row->gambar;?>">
										<img src="<?php echo base_url().'assets/photos/news/'.$row->gambar;?>" alt="preview" width="100px" height="130px">
									</div>
									<div class="form-group">
										<label for="formGroupExampleInput2">Isi</label>
										<textarea type="text" class="form-control" id="ckeditor" name="isi" ><?php echo $row->isi;?></textarea>
										<script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
										<script>
										var ckeditor = CKEDITOR.replace('isi');
										CKEDITOR.disableAutoInline = true;
										CKEDITOR.inline('editable')
										</script>
									</div>
									<button class="btn btn-primary" type="submit" id="">Simpan</a></button>
									</form>
							</div>
							<!-- ./box-body -->
<?php endforeach;?>
