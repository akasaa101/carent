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
            Marka Yönetimi
            <center><a href="marka-ekle"><button class="btn btn-success btn-xs">Marka Ekle</button></a></center>
          </div>
          <div class="table-responsive">

           <table class="table align-items-center table-flush">
            <thead>
             <tr>
              <th>#</th>
              <th>Marka Ad</th>
              <th>Marka Logo</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <?php 
          // Burada admin hesaplarini siralicaz
          $markasor=$db->prepare("SELECT * FROM marka order by marka_id ASC");
          $markasor->execute();
          $say=$markasor->rowCount();
          $say=="0";
          while ($markacek=$markasor->fetch(PDO::FETCH_ASSOC)) { 
            ?>
            <tr>
              <td><?php echo $say++ ?></td>
              <td><?php echo $markacek['marka_ad'] ?></td>
              <td><img src="../<?php echo $markacek['marka_logo'] ?>" class="product-img" alt="product img"></td>
              <td><a href="marka-duzenle?marka_id=<?php echo $markacek['marka_id'] ?>"><button class="btn btn-info">Düzenle</button></a></td>
              <td><a href="config/islem.php?marka_id=<?php echo $markacek['marka_id'] ?>&markasil=ok"><button class="btn btn-danger">SİL</button></a></td>
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