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
            <form method="post" action="config/islem">
              <h4 class="form-header text-uppercase">
                <i class="fa fa-check"></i>
                Ofis Ekleme
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Ofis Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="ofis_ad" placeholder="Ofis Adı" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Ofis Adres</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-2" name="ofis_adres" placeholder="Ofis Adresi" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Ofis Türü</label>
                <div class="col-sm-10">
                  <select class="form-control" name="ofis_tur" required>
                <option value="1" >Alış Ofisi</option>
                <option value="2" >Teslim Ofisi</option>
                </select>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="ofisekle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Ekle</button>
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