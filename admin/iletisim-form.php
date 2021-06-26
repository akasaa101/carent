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
            İletişim Formları
          </div>
          <div class="table-responsive">

           <table class="table align-items-center table-flush">
            <thead>
             <tr>
              <th>#</th>
              <th>Ad ve Soyad</th>
              <th>Telefon Numarası</th>
              <th>Durum</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <?php 
          // Burada admin hesaplarini siralicaz
          $formsor=$db->prepare("SELECT * FROM iletisimformu order by if_id ASC");
          $formsor->execute();
          $say=$formsor->rowCount();
          $say=="0";
          while ($formcek=$formsor->fetch(PDO::FETCH_ASSOC)) {?>
            <tr>
              <td><?php echo $say++ ?></td>
              <td><?php echo $formcek['if_ad'] ?></td>
              <td><?php echo $formcek['if_tel'] ?></td>
              <td><?php 
              if ($formcek['if_durum']==1) { ?>
                <span class="btn btn-sm btn-outline-success btn-round btn-block">Okundu</span>
              <?php } elseif ($formcek['if_durum']==0) { ?>
                <span class="btn btn-sm btn-outline-danger btn-round btn-block">Okunmadı</span>
             <?php } ?></td>
              <td><a href="iletisim-form-duzenle?if_id=<?php echo $formcek['if_id'] ?>"><button class="btn btn-info">Düzenle</button></a></td>
              <td><a href="config/islem.php?if_id=<?php echo $formcek['if_id'] ?>&iletisimformsil=ok"><button class="btn btn-danger">SİL</button></a></td>
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