<!-- Header of a page -->
<?php $this->load->view('headadmin'); ?>
<!-- Header of a page -->

  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <!-- <span class="logo-mini"><b>A</b>LT</span> -->
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Ovutest</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?=base_url('assets/dist/img/avatar04.png')?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?=$this->session->userdata('nama');?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header" style="text-align:center">
                    <img src="<?=base_url('assets/dist/img/avatar04.png')?>" class="user-image" alt="User Image">

                  <p>
                    <?=$this->session->userdata('nama');?>
                    <!-- <small>Member since Nov. 2012</small> -->
                  </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?=site_url('dashboard/profile')?>" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?=site_url('main/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
              <img src="<?=base_url('assets/dist/img/avatar04.png')?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p> <?=$this->session->userdata('nama');?></p>
          </div>
        </div>
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <?php if ($this->session->userdata('level')=='1'): ?>

            <li>
              <a href="<?=site_url('dashboard/manageuser');?>">
                <i class="fa fa-th"></i> <span>Kelola Data</span>
                <span class="pull-right-container">
                  <!-- <small class="label pull-right bg-green">new</small> -->
                </span>
              </a>
            </li>
            <li>
              <a href="<?=site_url('dashboard/news');?>">
                <i class="fa fa-th"></i> <span>Tambah Berita</span>
                <span class="pull-right-container">
                  <!-- <small class="label pull-right bg-green">new</small> -->
                </span>
              </a>
            </li>

          <?php elseif($this->session->userdata('level')==='3'): ?>
            <li>
              <a href="<?=site_url('dashboard/managePasien');?>">
                <i class="fa fa-th"></i> <span>Data Pasien</span>
                <span class="pull-right-container">
                  <!-- <small class="label pull-right bg-green">new</small> -->
                </span>
              </a>
            </li>
            <li>
              <a href="<?=site_url('dashboard/inputgambar');?>">
                <i class="fa fa-th"></i> <span>Input Gambar</span>
                <span class="pull-right-container">
                  <!-- <small class="label pull-right bg-green">new</small> -->
                </span>
              </a>
            </li>

          <?php else: ?>
            <li>
              <a href="<?=site_url('dashboard/inputdatapasien');?>">
                <i class="fa fa-th"></i> <span>Input Data Pasien</span>
                <span class="pull-right-container">
                  <!-- <small class="label pull-right bg-green">new</small> -->
                </span>
              </a>
            </li>
            <li>
              <a href="<?=site_url('dashboard/inputrekammedis');?>">
                <i class="fa fa-th"></i> <span>Input Rekam Medis</span>
                <span class="pull-right-container">
                  <!-- <small class="label pull-right bg-green">new</small> -->
                </span>
              </a>
            </li>
          <?php endif; ?>
          <li>
            <a href="<?=site_url('main/logout');?>">
              <i class="fa fa-th"></i> <span>Keluar</span>
              <span class="pull-right-container">
                <!-- <small class="label pull-right bg-green">new</small> -->
              </span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Signature
          <small>Ovutest</small>
        </h1>

      </section>

      <!-- Main content -->
      <section class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="box">
							<!-- /.box-header -->
							<?php $this->load->view($page_view);?>
							<!-- ./box-body -->
						</div>
						<!-- /.box -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->

			</section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2019 <a href="https://#">MyBarber</a>.</strong> All rights
      reserved.
    </footer>
  </div>

<!-- Footer of a page-->
<?php $this->load->view('footadmin'); ?>
<!-- Footer of a page-->
