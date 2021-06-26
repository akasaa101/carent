<?php 
include 'Cache.php';
include 'header.php';
$sef=$_GET['sef'];
?>
<?php 
//Randevu Ekle
if (isset($_POST['randevutamamla'])) {
$ekstralar = $_POST['randevu_ekstralar'];

  $asd;

  foreach ($ekstralar as $c) {
    $asd = $asd . $c . ',';
  }


  $asd = rtrim($asd,',');
  $ayarekle=$db->prepare("INSERT INTO randevu SET
    randevu_tc=:randevu_tc,
    arac_id=:arac_id,
    arac_fiyat=:arac_fiyat,
    randevu_ad=:randevu_ad,
    randevu_tel=:randevu_tel,
    randevu_mail=:randevu_mail,
    randevu_sehir=:randevu_sehir,
    randevu_ilce=:randevu_ilce,
    randevu_ulke=:randevu_ulke,
    randevu_dogum=:randevu_dogum,
    randevu_adres=:randevu_adres,
    randevu_kk=:randevu_kk,
    randevu_kurumsalad=:randevu_kurumsalad,
    randevu_kurumsalvergino=:randevu_kurumsalvergino,
    randevu_kurumsalvergidairesi=:randevu_kurumsalvergidairesi,
    randevu_ordertur=:randevu_ordertur,
    randevu_total=:randevu_total,
    randevu_ekstralar=:randevu_ekstralar,
    randevu_alistarih=:randevu_alistarih,
    randevu_teslimtarih=:randevu_teslimtarih,
    randevu_no=:randevu_no
    ");
  $insert=$ayarekle->execute(array(
    'randevu_tc' => $_POST['randevu_tc'],
    'arac_id' => $_POST['arac_id'],
    'arac_fiyat' => $_POST['arac_fiyat'],
    'randevu_ad' => $_POST['randevu_ad'],
    'randevu_tel' => $_POST['randevu_tel'],
    'randevu_mail' => $_POST['randevu_mail'],
    'randevu_sehir' => $_POST['randevu_sehir'],
    'randevu_ilce' => $_POST['randevu_ilce'],
    'randevu_ulke' => $_POST['randevu_ulke'],
    'randevu_dogum' => $_POST['randevu_dogum'],
    'randevu_adres' => $_POST['randevu_adres'],
    'randevu_kk' => $_POST['randevu_kk'],
    'randevu_kurumsalad' => $_POST['randevu_kurumsalad'],
    'randevu_kurumsalvergino' => $_POST['randevu_kurumsalvergino'],
    'randevu_kurumsalvergidairesi' => $_POST['randevu_kurumsalvergidairesi'],
    'randevu_ordertur' => $_POST['randevu_ordertur'],
    'randevu_total' => $_POST['randevu_total'],
    'randevu_ekstralar' => $asd,
    'randevu_alistarih' => $_POST['randevu_alistarih'],
    'randevu_teslimtarih' => $_POST['randevu_teslimtarih'],
    'randevu_no' => $_POST['randevu_no']
  ));

  if ($insert) {
    if ($ayarcek['b_r']==1) {
      function sendsms($msg, $telno, $header, $username, $pass)
      {

        $startdate=date('d.m.Y H:i');
        $startdate=str_replace('.', '',$startdate );
        $startdate=str_replace(':', '',$startdate);
        $startdate=str_replace(' ', '',$startdate);

        $stopdate=date('d.m.Y H:i', strtotime('+1 day'));
        $stopdate=str_replace('.', '',$stopdate );
        $stopdate=str_replace(':', '',$stopdate);
        $stopdate=str_replace(' ', '',$stopdate);


        $url="http://api.netgsm.com.tr/bulkhttppost.asp?usercode=$username&password=$pass&gsmno=$telno&message=$msg&msgheader=$header&startdate=$startdate&stopdate=$stopdate";
  //echo $url;

        $ch = curl_init(); 
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false);
        $output=curl_exec($ch);
        curl_close($ch);
        return $output;

      }

      $mesaj='Yeni Randevu Mevcut. Tarih : '.date('d.m.Y H:i');
      $tel=$ayarcek['netgsm_tel']; 
      $baslik=$ayarcek['netgsm_baslik'];
      $username=$ayarcek['netgsm_username']; 
      $pass=$ayarcek['netgsm_pass'];


      $mesaj = html_entity_decode($mesaj, ENT_COMPAT, "UTF-8"); 
      $mesaj = rawurlencode($mesaj); 


      $baslik = html_entity_decode($baslik, ENT_COMPAT, "UTF-8"); 
      $baslik = rawurlencode($baslik); 


      echo sendsms($mesaj,$tel,$baslik,$username,$pass);
    }
    if ($_POST['randevu_ordertur']==1) {
      header('location:odemebaslat?id='.$_POST['randevu_no']);
    } elseif ($_POST['randevu_ordertur']==2) {
      header('location:randevu/'.$_POST['randevu_no']);
    }
  } else {
    header("Location:randevu/sonuc?no".$_POST['randevu_no']);
  }
}
include 'veri.php';
?>
</div>

<div class="text-center col-md-12">
  <br>
  <br>
  <div class="alert alert-success">
    Randevunuz alınmıştır. Kısa süre içerisinde size dönüş sağlanıcaktır. <br>
    Randevu no : <span><?php echo $sef ?></span>
  </div>
</div>

<?php 
include 'footer.php';
 ?>