<?php 
include 'db.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar where ayar_id=:ayar_id");
$ayarsor->execute(array(
  'ayar_id' => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
if (isset($_POST['netgsmmesajgonder'])) {
if ($ayarcek['b_if']==1) {
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

      $mesaj=$_POST['netgsmmesaj'];
      $tel=$ayarcek['netgsm_tel']; 
      $baslik=$ayarcek['netgsm_baslik'];
      $username=$ayarcek['netgsm_username']; 
      $pass=$ayarcek['netgsm_pass'];


      $mesaj = html_entity_decode($mesaj, ENT_COMPAT, "UTF-8"); 
      $mesaj = rawurlencode($mesaj); 


      $baslik = html_entity_decode($baslik, ENT_COMPAT, "UTF-8"); 
      $baslik = rawurlencode($baslik); 


      echo sendsms($mesaj,$tel,$baslik,$username,$pass);
      header('location:../iletisim-form-duzenle?durum=ok');
    }
  }
 ?>