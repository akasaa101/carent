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
            Video Galeri Yönetimi
            <center><a href="video-galeri-ekle"><button class="btn btn-success btn-xs">Video Ekle</button></a></center>
          </div>
          <div class="table-responsive">

           <table class="table align-items-center table-flush">
            <thead>
             <tr>
              <th>#</th>
              <th>Video</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <?php 
          $vgsor=$db->prepare("SELECT * FROM vg order by vg_sira ASC");
          $vgsor->execute();
          $say=$vgsor->rowCount();
          while ($vgcek=$vgsor->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
              <td><?php echo $say++ ?></td>
              <td><video controls name="media" width="450" height="150">
                <source src="../<?php echo $vgcek['vg_link'] ?>" type="video/mp4"></video></td>
                  <td><a href="video-galeri-duzenle?vg_id=<?php echo $vgcek['vg_id'] ?>"><button class="btn btn-info">Düzenle</button></a></td>
                  <td><a href="config/islem.php?vg_id=<?php echo $vgcek['vg_id'] ?>&videogalerisil=ok"><button class="btn btn-danger">SİL</button></a></td>
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