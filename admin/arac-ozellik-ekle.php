<?php 
include 'header.php';
?>
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="post" enctype="multipart/form-data" data-parsley-validate action="config/islem">
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Özellik Ekle
              </h4>
         <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Özellik Sıra</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="input-1" name="ek_sira" placeholder="Özellik Sıra" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Özellik Ad</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="input-1" name="ek_ad" placeholder="Özellik Adı" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Özellik Fiyat</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="input-1" name="ek_fiyat" placeholder="Özellik Fiyatı" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="input-1" class="col-sm-2 col-form-label">Özellik Durum</label>
          <div class="col-sm-10">
            <select class="form-control" name="ek_durum" required>
              <option value="1" <?php echo $ekcek['ek_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
              <option value="2" <?php echo $ekcek['ek_durum'] == '2' ? 'selected=""' : ''; ?>>Pasif</option>
            </select>
          </div>
        </div>
        <div class="form-footer">
          <button type="submit" name="aracozellikekle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Ekle</button>
        </div>
      </form>
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