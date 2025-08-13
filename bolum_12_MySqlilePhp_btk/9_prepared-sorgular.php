<?php

include "4_ayar.php";

$baslik = "Angular Kursu";
$altBaslik = "İleri Seviye Angular Dersleri";
$resim = "4.jpg";
$tarih = "21.07.2025";
$yorumSayisi = 27;
$begeniSayisi = 451;
$onay = 1;

$query = "INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) VALUES (?,?,?,?,?,?,?)";

$stmt = mysqli_prepare($baglanti, $query);

//hazırlanmış (prepare) sql sorgularında kullanılır.Sql sorgusundaki  ? işaretine karşılık gelen değişkenleri bağlamaya (bind etmeye) yarar. 
mysqli_stmt_bind_param($stmt,'ssssiii',$baslik,$altBaslik,$resim,$tarih,$yorumSayisi,$begeniSayisi,$onay);

//stmt = statement
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

echo "veri eklendi";

mysqli_close($baglanti);
?>