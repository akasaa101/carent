<?php 
include 'Cache.php';
include 'header.php';
?>
<section class="blog-posts">
  <div class="container">
    <div class="row">
      <?php
      $blogsor=$db->prepare("SELECT * FROM blog order by blog_sira ASC");
      $blogsor->execute();
      $say=$blogsor->rowCount();
      while ($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="col-md-4">
          <div class="blog">
            <a href="blog/<?php echo seo($blogcek['blog_ad']) ?>"><img src="<?php echo $blogcek['blog_resim'] ?>"></a>
            <a href="blog/<?php echo seo($blogcek['blog_ad']) ?>">
              <center><h2 class="blog-title"><?php echo $blogcek['blog_ad'] ?></h2></center>
            </a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
<?php 
if ($say==0) { ?>
  <h3><center><p>Henüz bir blogumuz bulunmamaktadır.</p></center></h3>
<?php } ?>

<?php 
include 'footer.php';
?>