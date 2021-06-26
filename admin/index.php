<?php 
include 'header.php';
?>
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">

   <div class="row">
    <div class="col-12 col-lg-6 col-xl-3">
      <div class="card gradient-scooter">
        <div class="card-body text-center">
          <div class="icon-box"><i class="fa fa-check	"></i></div>
          <a href="javascript:void();"><h3 class="text-white mt-2"><?php echo $toplamrandevu ?></h3></a>
          <h6 class="text-white mt-2">Randevu Sayısı</h6>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-6 col-xl-3">
      <div class="card gradient-bloody">
        <div class="card-body text-center">
          <div class="icon-box"><i class="fa fa-car"></i></div>
          <a href="javascript:void();"><h3 class="text-white mt-2"><?php echo $toplamarac ?></h3></a>
          <h6 class="text-white mt-2">Araç Sayısı</h6>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-6 col-xl-3">
      <div class="card gradient-quepal">
        <div class="card-body text-center">
          <div class="icon-box"><i class="fa fa-building"></i></div>
          <a href="javascript:void();"><h3 class="text-white mt-2"><?php echo $toplammarka ?></h3></a>
          <h6 class="text-white mt-2">Marka Sayısı</h6>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-6 col-xl-3">
      <div class="card gradient-violet">
        <div class="card-body text-center">
          <div class="icon-box"><i class="fa fa-building"></i></div>
          <a href="javascript:void();"><h3 class="text-white mt-2"><?php echo $toplamofis ?></h3></a>
          <h6 class="text-white mt-2">Ofis Sayısı </h6>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header"><i class="fa fa-table"></i> Randevular</div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="default-datatable" class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Ad ve Soyad</th>
                  <th>Telefon Numarası</th>
                  <th>Randevu NO</th>
                  <th>Durum</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php 
          // Burada admin hesaplarini siralicaz
          $userssor=$db->prepare("SELECT * FROM randevu order by randevu_id ASC LIMIT 5");
          $userssor->execute();
          $say=$userssor->rowCount();
          $say=="0";
          while ($randevucek=$userssor->fetch(PDO::FETCH_ASSOC)) {?>
            <tr>
              <td><?php echo $say++ ?></td>
              <td><?php echo $randevucek['randevu_ad'] ?></td>
              <td><?php echo $randevucek['randevu_tel'] ?></td>
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
      </div>
    </div>
</div>

<?php 
include 'footer.php';
?>