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
            Araç Yönetimi
            <center><a href="arac-ekle"><button class="btn btn-success btn-xs">Araç Ekle</button></a></center>
          </div>
          <div class="table-responsive">

           <table class="table align-items-center table-flush">
            <thead>
             <tr>
              <th>#</th>
              <th>Arac Adı</th>
              <th>Arac Resim</th>
              <th>Marka Adı</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <?php 
          // Burada admin hesaplarini siralicaz
          $aracsor=$db->prepare("SELECT * FROM arac order by arac_id ASC");
          $aracsor->execute();
          $say=$aracsor->rowCount();
          $say=="0";
          while ($araccek=$aracsor->fetch(PDO::FETCH_ASSOC)) { 
            $marka_id=$araccek['marka_id'];
            // Burada marka bilgilerini çekicez
          $markasor=$db->prepare("SELECT * FROM marka where marka_id=:marka_id");
          $markasor->execute(array(
            'marka_id' => $marka_id
          ));
          $markacek=$markasor->fetch(PDO::FETCH_ASSOC);
            ?>
            <tr>
              <td><?php echo $say++ ?></td>
              <td><?php echo $araccek['arac_ad'] ?></td>
              <td><img width="120" src="../<?php echo $araccek['arac_resim'] ?>"></td>
              <td><?php echo $markacek['marka_ad'] ?></td>
              <td><a href="arac-duzenle?arac_id=<?php echo $araccek['arac_id'] ?>"><button class="btn btn-info">Düzenle</button></a></td>
              <td><a href="config/islem.php?arac_id=<?php echo $araccek['arac_id'] ?>&aracsil=ok"><button class="btn btn-danger">SİL</button></a></td>
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