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
            Ofis Yönetimi
            <center><a href="ofis-ekle"><button class="btn btn-success btn-xs">Ofis Ekle</button></a></center>
          </div>
          <div class="table-responsive">

           <table class="table align-items-center table-flush">
            <thead>
             <tr>
              <th>#</th>
              <th>Ofis Ad</th>
              <th>Ofis Türü</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <?php 
          // Burada admin hesaplarini siralicaz
          $ofissor=$db->prepare("SELECT * FROM ofis order by ofis_id ASC");
          $ofissor->execute();
          $say=$ofissor->rowCount();
          $say=="0";
          while ($ofiscek=$ofissor->fetch(PDO::FETCH_ASSOC)) { 
            ?>
            <tr>
              <td><?php echo $say++ ?></td>
              <td><?php echo $ofiscek['ofis_ad'] ?></td>
              <td><?php 
              if ($ofiscek['ofis_tur']==1) { ?>
                <span class="btn btn-sm btn-outline-success btn-round btn-block">Alış</span>
              <?php } elseif ($ofiscek['ofis_tur']==2) { ?>
                <span class="btn btn-sm btn-outline-danger btn-round btn-block">Teslim</span>
             <?php } ?></td>
              <td><a href="ofis-duzenle?ofis_id=<?php echo $ofiscek['ofis_id'] ?>"><button class="btn btn-info">Düzenle</button></a></td>
              <td><a href="config/islem.php?ofis_id=<?php echo $ofiscek['ofis_id'] ?>&ofissil=ok"><button class="btn btn-danger">SİL</button></a></td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<?php 
include 'footer.php';
?>