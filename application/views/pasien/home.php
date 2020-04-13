<?php include 'template/header.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <!--::header part start::-->

    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                        <?php if($this->session->userdata('logged_in') == TRUE):?>
                        <h2>Welcome, <?=$this->session->userdata('nama');?></h2>
                        <?php endif; ?>
                            <h5>We are here for your care</h5>
                            <h1>Best Care &
                                Better Doctor</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="<?php echo base_url();?>assets/img/banner_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about us part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="<?php echo base_url();?>assets/img/top_service.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>About us</h2>
                        <p>Alat pendeteksi kesuburan menggunakan saliva adalah teknologi digital baru yang dapat memberikan kemudahan </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php foreach($news->result() as $row):?>
                <div class="col-sm-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="<?php echo base_url();?>assets/photos/news/<?php echo $row->gambar;?>" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="<?php echo base_url(); ?>main/detail/<?php echo $row->id;?>">
                                    <h5 class="card-title"><?php echo $row->judul; ?></h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-user"></span>Admin</li>
                                    <li> <span class="ti-bookmark"></span>Clinic, doctors</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->


</body>

</html>
<?php include 'template/footer.php';?>
