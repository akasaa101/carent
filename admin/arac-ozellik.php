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
            Araç Özellik Yönetimi
            <center><a href="arac-ozellik-ekle"><button class="btn btn-success btn-xs">Özellik Ekle</button></a></center>
          </div>
          <div class="table-responsive">

           <table class="table align-items-center table-flush">
            <thead>
             <tr>
              <th>#</th>
              <th>Özellik Adı</th>
              <th>Özellik Fiyatı</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <?php 
          // Burada admin hesaplarini siralicaz
          $eksor=$db->prepare("SELECT * FROM ekstra order by ek_id ASC");
          $eksor->execute();
          $say=$eksor->rowCount();
          $say=="0";
          while ($ekcek=$eksor->fetch(PDO::FETCH_ASSOC)) { 
            ?>
            <tr>
              <td><?php echo $say++ ?></td>
              <td><?php echo $ekcek['ek_ad'] ?></td>
              <td><?php echo $ekcek['ek_fiyat'] ?></td>
              <td><a href="arac-ozellik-duzenle?ek_id=<?php echo $ekcek['ek_id'] ?>"><button class="btn btn-info">Düzenle</button></a></td>
              <td><a href="config/islem.php?ek_id=<?php echo $ekcek['ek_id'] ?>&aracozelliksil=ok"><button class="btn btn-danger">SİL</button></a></td>
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