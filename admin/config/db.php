<?php 
error_reporting(E_ALL ^ E_NOTICE); 
try {

	$db=new PDO("mysql:host=localhost;dbname=emre_arac;charset=utf8",'emre_arac','123qweasdEe**');

	//echo "Veritabanı bağlantısı başarılı";

} catch (PDOExpception $e) {

	echo $e->getMessage();
}



?>