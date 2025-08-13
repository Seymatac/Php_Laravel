<?php

include "4_ayar.php";

$query = "SELECT * from kurslar";
//$query = "SELECT id, baslik from kurslar";

$sonuc = mysqli_query($baglanti,$query);

// mysqli_fetch_row => Okunacak olan kayıt metodu 
// döngü içinde bütün sorguları okur.
while($row = mysqli_fetch_row($sonuc)){
    //id , baslik, altBaslik bilgisi
echo $row[0]." ".$row[1]." ".$row[2];
echo "<br>";}
echo "<hr>";

/* cursor kayıtların sonuna geldiğinde sorguyu tekrar çalıştırmak ve cursorun en başa gelmesini sağlamak */
$sonuc = mysqli_query($baglanti,$query);

// mysqli_fetch_assoc => key-value şeklinde getirme.
while($row = mysqli_fetch_assoc($sonuc)){
    echo $row["id"]." ".$row["baslik"]." ".$row["resim"];
    echo "<br>";}
mysqli_close($baglanti);
?>