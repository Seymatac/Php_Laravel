<?php

include "4_ayar.php";

//$query = "UPDATE kurslar SET baslik = 'Php Dersleri', altBaslik='İleri Seviye Php Dersleri' WHERE id=1";
//$query = "UPDATE kurslar SET onay = 1";
$query = "UPDATE kurslar SET resim = '1.jpg' WHERE 
onay = 1";

$sonuc = mysqli_query($baglanti, $query);

if($sonuc){
 echo "veri güncellendi";
} else {
    echo "güncelleme hatasi.";
}
mysqli_close($baglanti);
?>
