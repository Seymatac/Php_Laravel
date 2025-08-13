<?php

include "4_ayar.php";

$query = "INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) VALUE('Angular Kursu','İleri seviye angular dersleri','1.jpg','10/10/2023',10,10,1)";

// $query .= ile querye ekleme yapılır. Query sorgularının sonuna ; eklenir.
 //$query .= "INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) VALUE('Angular Kursu','İleri seviye angular dersleri','1.jpg','10/10/2023',10,10,1);";

 // hangi bağlantı üzerinden çalışacağı bağlantı ismi ve query bilgisi
 $sonuc = mysqli_query($baglanti, $query);
 $inserted_id = mysqli_insert_id($baglanti);



 // Çoklu kayıt bilgisi için kullanılan method
 //$sonuc = mysqli_multi_query($baglanti, $query);

 if($sonuc){
    echo "kayit eklendi <br>".$inserted_id;
    echo "<br>";
 } else {
    echo "kayit eklenemedi <br>";
 }

mysqli_close($baglanti);
echo "mysql baglantisi kapatildi.";
?>
