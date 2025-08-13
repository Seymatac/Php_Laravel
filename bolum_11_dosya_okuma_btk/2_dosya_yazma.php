<?php

//$myfile = fopen("dosya2.txt", "w");
//$myfile = fopen("dosya2.txt", "a");
 
// Hem  yazma hem okuma modu 
$myfile = fopen("dosya2.txt", "a+");

$title = "Java Dersleri\n";
fwrite($myfile, $title);

// Dosya okuma işlemi
//$myfile = fopen("dosya2.txt", "r");

// fseek = Dosya içindeki konumu değiştirir.
// Dosya içindeki konumdan ne kadar ileri/geri gidip geleceği
fseek($myfile,0);

while(!feof($myfile)){
echo fgets($myfile)."<br>";
}
fclose($myfile);


?>