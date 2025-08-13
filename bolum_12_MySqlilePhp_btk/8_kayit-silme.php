<?php

include "4_ayar.php";

//$query = "DELETE FROM kurslar WHERE id = 6";
$query = "DELETE FROM kurslar WHERE id > 4 and id < 15";

$sonuc = mysqli_query($baglanti, $query);

//Kaç satır etkilenmişse o sayıyı bize verir.
$adet = mysqli_affected_rows($baglanti);

if($sonuc){
    echo "veri silindi." .$adet;
}else{
 echo "veri silme hatasi";
}

mysqli_close($baglanti);

?>