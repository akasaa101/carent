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
            E-Bülten
          </div>
          <div class="table-responsive">

           <table class="table align-items-center table-flush">
            <thead>
             <tr>
              <th>#</th>
              <th>E-mail</th>
            </tr>
          </thead>
          <?php 
          // E-bulten siralicaz
          $esor=$db->prepare("SELECT * FROM ebulten order by e_id ASC");
          $esor->execute();
          $say=$esor->rowCount();
          $say=="0";
          while ($ecek=$esor->fetch(PDO::FETCH_ASSOC)) {?>
            <tr>
              <td><?php echo $say++ ?></td>
              <td><?php echo $ecek['e_mail'] ?></td>
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