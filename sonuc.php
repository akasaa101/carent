<?php 
include 'Cache.php';
include 'header.php';
?>
</div>
<?php
$post = $_POST;
$merchant_key   = $ayarcek['paytr_mkey'];
$merchant_salt  = $ayarcek['paytr_msalt'];
$hash = base64_encode( hash_hmac('sha256', $post['merchant_oid'].$merchant_salt.$post['status'].$post['total_amount'], $merchant_key, true) );
if( $hash != $post['hash'] )
  die('PAYTR notification failed: bad hash');
  if( $post['status'] == 'success' ) { ## Ödeme Onaylandı
    $merchant_oid=$_POST['merchant_oid'];

//sipariş onayla
    $siparisonayla=$db->prepare("update randevu set randevu_orderdurum=2 where randevu_no='$merchant_oid'");
    $siparisonayla->execute(); ?>
    <div class="text-center col-md-12">
      <br>
      <br>
      <div class="alert alert-success">
        Randevunuz alınmıştır. Kısa süre içerisinde size dönüş sağlanıcaktır. <br>
        Randevu no : <span><?php echo $merchant_oid ?></span>
      </div>
    </div>
  <?php } else { ?>
    <div class="text-center col-md-12">
      <br>
      <br>
      <div class="alert alert-success">
        Ödemeniz başarısız olmuştur.<br>
        Neden : <span><?php echo $post['failed_reason_msg'] ?></span>
      </div>
    </div>

  <?php }

  ## Bildirimin alındığını PayTR sistemine bildir.
  echo "OK";
  exit;
  ?>

  <?php 
  include 'footer.php';
  ?>