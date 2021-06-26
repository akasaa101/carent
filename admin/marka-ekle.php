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
                Marka Ekleme
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Marka Adı</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-1" name="marka_ad" placeholder="Marka Adı" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Marka Logo</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="input-2" name="marka_logo" placeholder="Marka Logo" required>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="markaekle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Ekle</button>
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