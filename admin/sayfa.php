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
            Sayfa Yönetimi
            <center><a href="sayfa-ekle"><button class="btn btn-success btn-xs">Sayfa Ekle</button></a></center>
          </div>
          <div class="table-responsive">

           <table class="table align-items-center table-flush">
            <thead>
             <tr>
              <th>#</th>
              <th>Sayfa Adı</th>
              <th>Durum</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <?php 
          // Burada admin hesaplarini siralicaz
          $sayfasor=$db->prepare("SELECT * FROM sayfa order by sayfa_id ASC");
          $sayfasor->execute();
          $say=$sayfasor->rowCount();
          $say=="0";
          while ($sayfacek=$sayfasor->fetch(PDO::FETCH_ASSOC)) {?>
            <tr>
              <td><?php echo $say++ ?></td>
              <td><?php echo $sayfacek['sayfa_ad'] ?></td>
              <td><?php 
              if ($sayfacek['sayfa_durum']==1) { ?>
                <span class="btn btn-sm btn-outline-success btn-round btn-block">Aktif</span>
              <?php } elseif ($sayfacek['sayfa_durum']==2) { ?>
                <span class="btn btn-sm btn-outline-danger btn-round btn-block">Pasif</span>
             <?php } ?></td>
              <td><a href="sayfa-duzenle?sayfa_id=<?php echo $sayfacek['sayfa_id'] ?>"><button class="btn btn-info">Düzenle</button></a></td>
              <td><a href="config/islem.php?sayfa_id=<?php echo $sayfacek['sayfa_id'] ?>&sayfasil=ok"><button class="btn btn-danger">SİL</button></a></td>
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