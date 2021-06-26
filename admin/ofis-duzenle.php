<?php 
include 'header.php';
$ofissor=$db->prepare("SELECT * FROM ofis where ofis_id=:id");
$ofissor->execute(array(
  'id' => $_GET['ofis_id']
));
$ofiscek=$ofissor->fetch(PDO::FETCH_ASSOC);
?>
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="post" action="config/islem">
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Ofis Düzenle
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Ofis Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ofis_ad" value="<?php echo $ofiscek['ofis_ad'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Ofis Adres</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-2" name="ofis_adres" value="<?php echo $ofiscek['ofis_adres'] ?>" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">Ofis Türü</label>
                <div class="col-sm-10">
                  <select class="form-control" name="ofis_tur" required>
                  <option value="1" <?php echo $ofiscek['ofis_tur'] == '1' ? 'selected=""' : ''; ?>>Alış</option>
                  <option value="2" <?php echo $ofiscek['ofis_tur'] == '2' ? 'selected=""' : ''; ?>>Teslim</option>
                </select>
                </div>
              </div>
              <input type="hidden" value="<?php echo $ofiscek['ofis_id'] ?>" name="ofis_id">
              <div class="form-footer">
                <button type="submit" name="ofisguncelle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Güncelle</button>
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