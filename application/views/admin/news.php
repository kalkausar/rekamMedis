                <div class="box-header with-border">
                	<h3 class="box-title">Add Content</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                	<a href="<?php echo base_url(); ?>dashboard/createNews" type="button" class="btn btn-success">Create News</a>
                	<table class="table table-striped">
                		<thead>
                			<tr>
                				<th scope="col">No</th>
                				<th scope="col">Gambar</th>
                				<th scope="col">Judul</th>
                				<th scope="col">Aksi</th>
                			</tr>
                		</thead>
                		<tbody>
                			<?php $nomor=1; ?>
                			<?php foreach($news->result() as $row): ?>
                			<tr>
                				<th scope="row"><?php echo $nomor; ?></th>
                				<td><?php echo $row->judul; ?></td>
                				<td><img src="<?php echo base_url().'assets/photos/news/'.$row->gambar;?>" width="100px" height="130px"></td>
                				<td>
                					<a href="<?php echo base_url('dashboard/editNews');?>/<?php echo $row->id;?>" class="btn btn-info btn-sm" role="button" style="margin-bottom:10px">Edit</a> <br>
                					<a href="<?php echo base_url('dashboard/delete_news');?>/<?php echo $row->id;?>" onClick="return confirm('Anda yakin menghapus data <?php echo $row->judul;?> ?')" class="btn btn-danger btn-sm"
                					  role="button">Delete</a>
                				</td>
                			</tr>
                			<?php $nomor++; ?>
                			<?php endforeach; ?>
                		</tbody>
                	</table>
                </div>
                <!-- ./box-body -->
