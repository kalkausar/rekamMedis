<?php include 'template/header.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
   <!--================Blog Area =================-->
   <?php foreach($konten->result() as $row): ?>
   <section class="blog_area single-post-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php echo base_url(); ?>assets/photos/news/<?php echo $row->gambar;?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php echo $row->judul;?>
                     </h2>
                     <p>
                        <?php echo $row->isi;?>
                     </p>
                  </div>
               </div>
            </div>
          <?php endforeach;?>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Post</h3>
                     <?php foreach($news->result() as $row):?>
                     <div class="media post_item">
                        <img src="<?php echo base_url(); ?>assets/photos/news/<?php echo $row->gambar;?>" width="100px" alt="post">
                        <div class="media-body">
                           <a href="<?php echo base_url(); ?>main/detail/<?php echo $row->id;?>">
                              <h3><?php echo $row->judul;?></h3>
                           </a>
                        </div>
                     </div>
                   <?php endforeach;?>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->

 </body>

 </html>
<?php include 'template/footer.php';?>
