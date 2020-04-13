<div class="box-header with-border">
	<h3 class="box-title">Manage Kunjungan</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
	<a href="<?php echo base_url(); ?>dashboard/tambahPasien" type="button" class="btn btn-success">Tambah Data Pasien</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama Pasien</th>
				<th scope="col">Tanggal Lahir</th>
				<th scope="col">Alamat</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php foreach($user as $row): ?>
			<tr>
				<th scope="row"><?php echo $nomor; ?></th>
				<td><?php echo $row['nama']; ?></td>
				<td><?php $date=date_create($row['tgl_lahir']);
                  echo date_format($date, "d/m/Y"); ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td>
					<a href="<?php echo base_url('dashboard/editPasien');?>/<?php echo $row['id'];?>" class="btn btn-info btn-sm" role="button" style="margin-bottom:10px">Edit</a> <br>
					<a href="<?php echo base_url('dashboard/delete_user');?>/<?php echo $row['id'];?>" onClick="return confirm('Anda yakin menghapus data <?php echo $row['nama'];?> ?')" class="btn btn-danger btn-sm" role="button">Delete</a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<!-- ./box-body -->
