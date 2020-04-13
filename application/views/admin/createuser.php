<div class="box-header with-border">
	<h3 class="box-title">Add User</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
	<form action="<?php echo base_url('dashboard/createUser_data');?>" enctype="multipart/form-data" method="post">
		<div class="form-group">
			<label for="formGroupExampleInput">Nama</label>
			<input type="text" class="form-control" name="nama" placeholder="Nama">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Username</label>
			<input type="text" class="form-control" name="username" placeholder="username">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Alamat</label>
			<input type="text" class="form-control" name="alamat" placeholder="Alamat">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Nomor Hp</label>
			<input type="text" class="form-control" name="noHp" placeholder="08xxxxxxxxxx">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Tanggal Lahir</label>
			<input type="date" class="form-control" name="tgl_lahir">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Level</label>
			<select class="form-control" id="exampleFormControlSelect1" name="level">
				<option value="1">Admin</option>
				<option value="2">Pasien</option>
				<option value="3">Dokter</option>
			</select>
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Password</label>
			<input type="password" class="form-control" name="password">
		</div>
		<button class="btn btn-primary" type="submit" id="">Submit</a></button>
	</form>
</div>
<!-- ./box-body -->
