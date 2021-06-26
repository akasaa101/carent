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
            Admin Yönetimi
            <center><a href="users-ekle"><button class="btn btn-success btn-xs">Admin Ekle</button></a></center>
          </div>
          <div class="table-responsive">

           <table class="table align-items-center table-flush">
            <thead>
             <tr>
              <th>#</th>
              <th>Ad ve Soyad</th>
              <th>Kullanıcı Adı</th>
              <th>Durum</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <?php 
          // Burada admin hesaplarini siralicaz
          $userssor=$db->prepare("SELECT * FROM user order by user_id ASC");
          $userssor->execute();
          $say=$userssor->rowCount();
          $say=="0";
          while ($userscek=$userssor->fetch(PDO::FETCH_ASSOC)) {?>
            <tr>
              <td><?php echo $say++ ?></td>
              <td><?php echo $userscek['user_name'] ?></td>
              <td><?php echo $userscek['user_username'] ?></td>
              <td><?php 
              if ($userscek['user_durum']==1) { ?>
                <span class="btn btn-sm btn-outline-success btn-round btn-block">Aktif</span>
              <?php } elseif ($userscek['user_durum']==2) { ?>
                <span class="btn btn-sm btn-outline-danger btn-round btn-block">Pasif</span>
             <?php } ?></td>
              <td><a href="users-duzenle?user_id=<?php echo $userscek['user_id'] ?>"><button class="btn btn-info">Düzenle</button></a></td>
              <td><a href="config/islem.php?user_id=<?php echo $userscek['user_id'] ?>&userssil=ok"><button class="btn btn-danger">SİL</button></a></td>
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