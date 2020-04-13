<?php foreach ($user->result() as $row): ?>
<div class="box-header with-border">
	<h3 class="box-title">Edit User</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
	<form action="<?php echo base_url('dashboard/editUser_data');?>" enctype="multipart/form-data" method="post">
		<input type="hidden" class="form-control" name="id" value="<?php echo $row->id;?>">
		<div class="form-group">
			<label for="formGroupExampleInput">Nama</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $row->nama;?>">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Username</label>
			<input type="text" class="form-control" name="username" value="<?php echo $row->username;?>">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Alamat</label>
			<input type="text" class="form-control" name="alamat" value="<?php echo $row->alamat;?>">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Nomor Hp</label>
			<input type="text" class="form-control" name="noHp" value="<?php echo $row->noHp;?>">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Tanggal Lahir</label>
			<input type="date" class="form-control" name="tgl_lahir" value="<?php echo $row->tgl_lahir;?>">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Level</label>
			<select class="form-control" id="exampleFormControlSelect1" name="level">
				<option <?php if ($row->level == 1 ) echo 'selected' ; ?> value="1">Admin</option>
				<option <?php if ($row->level == 2 ) echo 'selected' ; ?> value="2">Pasien</option>
				<option <?php if ($row->level == 3 ) echo 'selected' ; ?> value="3">Dokter</option>
			</select>
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Password</label>
			<input type="password" class="form-control" name="password">
			<input type="hidden" name="old_password" value="<?php echo $row->password;?>">
		</div>
		<button class="btn btn-primary" type="submit" id="">Simpan</a></button>
	</form>
</div>
<!-- ./box-body -->
<?php endforeach;?>
