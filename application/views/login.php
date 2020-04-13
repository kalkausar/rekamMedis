<!-- Header of a page -->
<?php $this->load->view('load/head'); ?>
<!-- Header of a page -->

<div class="mainbg">
<div style="background: rgba(0,0,0,.5);">
<div class="container">
	<div class="col-md-12" style="margin:5.23% auto; height:600px;">

		<center>
			<h1><label style="font-family: 'Avenir Next';font-size: 2em;color:#f9f9f9; margin-top:80px;">LOGIN</label></h1>
			<p style="width:50%;color:#f5f5f5;font-size: 1.1em;opacity:0.8;font-weight:500 !important;line-height: 24px;font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">Masukkan username dan password anda.</p>
			<!-- <label class="btm"></label> -->

		<div class="" style="margin:2% auto;width:45%;">
		<?php if ($this->session->flashdata('error')){ ?>
		<div class="alert alert-danger">
			<strong>Gagal!</strong> Username dan password salah, silahkan periksa kembali Username dan Password Anda :)
		</div>
		<?php } ?>
			<div class="panel-body" style="padding: 0;">
				<form class="form" method="post" action="<?=site_url('main/actlogin')?>">
				<div class="panel panel-default">
					<div class="form-group">
						<input type="text" name="username" placeholder="Nama pengguna" autocomplete="off" style="border: none;" class="form-control mform">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Kata sandi" autocomplete="off" style="border: none;" class="form-control mform">
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-block mybtn mybtnDaftar" style="background-color:#007bff">Masuk</button>
				</div>
				</form>
			</div>
		</div>
		</center>

	</div>

</div>
</div>
</div>
<!-- Footer of a page-->
<?php $this->load->view('load/foot'); ?>
<!-- Footer of a page-->
