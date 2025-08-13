<?php

/* fopen("dosya_ismi", "dosya_acma_modu");

dosya açma modları:

r = dosya okuma modunda açılır. İmleç dosyanın başında yer alır.
w = dosya yazma modunda açılır. İmleç dosyanın başında yer alır. Dosya konumdaysa içindeki tüm veriler silinir.
a = dosya yazma modunda açılır.  İmleç dosya sonundadır. Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturur.
x = Dosya yazma modunda açılır. Dosya yoksa oluşturulur , varsa false döner.
*/

$myfile = fopen("dosya.txt","r");
// on bytelık veriyi okur ve sayfaya yazdırır.
//echo fread($myfile, 10);

// dosya boyutu kadar yazdırır.
$mysize = filesize("dosya.txt");
//echo fread($myfile, $mysize);

// dosya bilgilerini satır satır verir.
/*echo fgets($myfile)."<br>";
echo fgets($myfile)."<br>";
echo fgets($myfile)."<br>";*/

/* Döngü ile 
file end of file:
Dosya en sona gelmediği sürece fgets işlemini tekrarla.*/
while(!feof($myfile)){
    echo fgets($myfile)."<br>";
}
fclose($myfile);  
  
?>