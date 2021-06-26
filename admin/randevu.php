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
            Randevu Yönetimi
          </div>
          <div class="table-responsive">

           <table class="table align-items-center table-flush">
            <thead>
             <tr>
              <th>#</th>
              <th>Ad ve Soyad</th>
              <th>Randevu NO</th>
              <th>Durum</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <?php 
          // Burada admin hesaplarini siralicaz
          $userssor=$db->prepare("SELECT * FROM randevu order by randevu_id ASC");
          $userssor->execute();
          $say=$userssor->rowCount();
          $say=="0";
          while ($randevucek=$userssor->fetch(PDO::FETCH_ASSOC)) {?>
            <tr>
              <td><?php echo $say++ ?></td>
              <td><?php echo $randevucek['randevu_ad'] ?></td>
              <td><?php echo $randevucek['randevu_no'] ?></td>
              <td><?php 
              if ($randevucek['randevu_durum']==2) { ?>
                <span class="btn btn-sm btn-outline-success btn-round btn-block">Okundu</span>
              <?php } elseif ($randevucek['randevu_durum']==1) { ?>
                <span class="btn btn-sm btn-outline-danger btn-round btn-block">Okunmadı</span>
             <?php } ?></td>
              <td><a href="randevu-duzenle?randevu_id=<?php echo $randevucek['randevu_id'] ?>"><button class="btn btn-info">Düzenle</button></a></td>
              <td><a href="config/islem.php?randevu_id=<?php echo $randevucek['randevu_id'] ?>&randevusil=ok"><button class="btn btn-danger">SİL</button></a></td>
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