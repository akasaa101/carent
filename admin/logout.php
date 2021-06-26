<?php 
//session başlatıyoruz
session_start();
//session'u siliyor ve çıkışı sağlıyoruz
session_destroy();
//çıkış sağlanıyor ve login'e yönlendirme yapıyoruz.
header('location:login');
 ?>