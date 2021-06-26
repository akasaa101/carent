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
            <form method="post" action="config/islem" enctype="multipart/form-data" data-parsley-validate>
              <h4 class="form-header text-uppercase">
                <i class="fa fa-newspaper-o"></i>
                Video Ekle
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Video</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="input-1" name="vg_link" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Video Sıra</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="input-1" name="vg_sira" placeholder="Video Sırası" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-3" class="col-sm-2 col-form-label">Video Durum</label>
                <div class="col-sm-10">
                  <select class="form-control" name="vg_durum">
                    <option value="1">Aktif</option>
                    <option value="2">Pasif</option>
                  </select>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="vgekle" class="btn btn-success"><i class="fa fa-check-square-o"></i> Ekle</button>
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