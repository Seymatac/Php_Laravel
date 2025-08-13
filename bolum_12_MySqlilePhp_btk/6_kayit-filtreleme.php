<?php

include "4_ayar.php";

//$query = "SELECT * from kurslar WHERE id=1";
//$query = "SELECT * from kurslar WHERE onay=0";
//$query = "SELECT * from kurslar WHERE id>4 and id<7";
//$query = "SELECT * from kurslar WHERE baslik='Angular Kursu'";

// Kurs kelimesi geçen bütün kayıtları al
$query = "SELECT * from kurslar WHERE baslik like '%Angular%' and onay = 0";

 $sonuc = mysqli_query($baglanti, $query);

 if(mysqli_num_rows($sonuc) > 0){
while($satir = mysqli_fetch_assoc($sonuc)){
echo $satir["id"]." ".$satir["baslik"];
echo "<br>";}}
else {
    echo "kayit yok."; }
mysqli_close($baglanti);
?>
