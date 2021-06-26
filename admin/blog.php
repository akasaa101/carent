<?php 
include 'header.php';
?>
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header border-0">
            Blog Yönetimi
            <center><a href="blog-ekle"><button class="btn btn-success btn-xs">Blog Ekle</button></a></center>
          </div>
          <div class="table-responsive">

           <table class="table align-items-center table-flush">
            <thead>
             <tr>
              <th>#</th>
              <th>Blog Başlık</th>
              <th>Durum</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <?php 
          // Burada admin hesaplarini siralicaz
          $blogsor=$db->prepare("SELECT * FROM blog order by blog_sira ASC");
          $blogsor->execute();
          $say=$blogsor->rowCount();
          $say=="0";
          while ($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) {?>
            <tr>
              <td><?php echo $say++ ?></td>
              <td><?php echo $blogcek['blog_ad'] ?></td>
              <td><?php 
              if ($blogcek['blog_durum']==1) { ?>
                <span class="btn btn-sm btn-outline-success btn-round btn-block">Aktif</span>
              <?php } elseif ($blogcek['blog_durum']==2) { ?>
                <span class="btn btn-sm btn-outline-danger btn-round btn-block">Pasif</span>
             <?php } ?></td>
              <td><a href="blog-duzenle?blog_id=<?php echo $blogcek['blog_id'] ?>"><button class="btn btn-info">Düzenle</button></a></td>
              <td><a href="config/islem.php?blog_id=<?php echo $blogcek['blog_id'] ?>&blogsil=ok"><button class="btn btn-danger">SİL</button></a></td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</div><!--End Row-->
</div>
</div>
</div>
<?php 
include 'footer.php';
?>