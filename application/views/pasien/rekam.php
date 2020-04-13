<?php include 'template/header.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
	<!-- breadcrumb start-->
	<section class="breadcrumb_part breadcrumb_bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb_iner">
						<div class="breadcrumb_iner_item">
							<h2>Rekam Medis</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- breadcrumb start-->
	<!-- Start Sample Area -->
	<section class="sample-text-area">
		<div class="container">
  			<h3 class="text-heading">Biodata Pasien</h3>
			<div class="row">
				<div class="col-sm-3">
          <p class="sample-text">Nama</p> <br>
    			<p class="sample-text">Tanggal Lahir</p> <br>
    			<p class="sample-text">Alamat</p> <br>
    			<p class="sample-text">Nomor Hp</p> <br>
    			<p class="sample-text">Golongan Darah</p> <br>
    			<p class="sample-text">Riwayat</p> <br>
    			<p class="sample-text">Pekerjaan</p> <br>
    			<p class="sample-text">Status</p>
				</div>
				<div class="col-sm-1" style="margin-right:-7%">
          <p class="sample-text">:</p> <br>
    			<p class="sample-text">:</p> <br>
    			<p class="sample-text">:</p> <br>
    			<p class="sample-text">:</p> <br>
    			<p class="sample-text">:</p> <br>
    			<p class="sample-text">:</p> <br>
    			<p class="sample-text">:</p> <br>
    			<p class="sample-text">:</p>
				</div>
				<div class="col">
          <?php foreach($user as $row): ?>
          <p class="sample-text"><?php echo $row['nama']; ?></p> <br>
    			<p class="sample-text"><?php $date=date_create($row['tgl_lahir']);
                    echo date_format($date, "d F Y"); ?></p> <br>
    			<p class="sample-text"><?php echo $row['alamat']; ?></p> <br>
    			<p class="sample-text"><?php echo $row['noHp']; ?></p> <br>
    			<p class="sample-text"><?php echo $row['gol_darah']; ?></p> <br>
    			<p class="sample-text"><?php echo $row['riwayat']; ?></p> <br>
    			<p class="sample-text"><?php echo $row['pekerjaan']; ?></p> <br>
    			<p class="sample-text"><?php if ($row['status'] == 1){
            echo "Menikah";
          }elseif($row['status']==2){
            echo "Belum Menikah";
          }elseif($row['status']==3){
            echo "Cerai";
          }; ?></p>
        <?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End Sample Area -->

	<!-- Start Button -->
	<section class="button-area">
		<div class="container box_1170 border-top-generic">
			<h3 class="text-heading">Rekam Medis</h3>
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Tanggal Kunjungan</th>
      <th scope="col">Nama Dokter</th>
      <th scope="col" style="text-align:center">Saliva Input </th>
			<th scope="col" style="text-align:center">Proccessing </th>
			<th scope="col" style="text-align:center">Result </th>
      <th scope="col">Diagnosa</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($rekam as $row):?>
    <tr>
      <td><?php $date=date_create($row['tgl_konsul']);
                echo date_format($date, "d F Y"); ?></td>
      <td><?php echo $row['namaDokter'] ?></td>
      <td style="text-align:center"><img src="<?php echo base_url().'assets/photos/rekam/'.$row['gambar'];?>" width="100px" height="130px"></td>
			<td style="text-align:center"><img src="<?php echo base_url().'assets/photos/rekam/'.$row['gambar2'];?>" width="100px" height="130px"></td>
			<td style="text-align:center"><img src="<?php echo base_url().'assets/photos/rekam/'.$row['gambar3'];?>" width="100px" height="130px"></td>
      <td><?php echo $row['diagnosa'] ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
		</div>
	</section>
	<!-- End Button -->

</body>

</html>
<?php include 'template/footer.php';?>
