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
            Foto Galeri Yönetimi
            <center><a href="foto-galeri-ekle"><button class="btn btn-success btn-xs">Foto Ekle</button></a></center>
          </div>
          <div class="table-responsive">

           <table class="table align-items-center table-flush">
            <thead>
             <tr>
              <th>#</th>
              <th>Resim</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <?php 
          $fgsor=$db->prepare("SELECT * FROM fg order by fg_sira ASC");
          $fgsor->execute();
          $say=$fgsor->rowCount();
          while ($fgcek=$fgsor->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
              <td><?php echo $say++ ?></td>
              <td><img width="120" src="../<?php echo $fgcek['fg_link'] ?>"></td>
              <td><a href="foto-galeri-duzenle?fg_id=<?php echo $fgcek['fg_id'] ?>"><button class="btn btn-info">Düzenle</button></a></td>
              <td><a href="config/islem.php?fg_id=<?php echo $fgcek['fg_id'] ?>&fotogalerisil=ok"><button class="btn btn-danger">SİL</button></a></td>
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