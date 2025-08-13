 <?php 
//$isim = "adnan";
//$iSim = "hüseyin";
//$isiM = "elif";
$isim = "adnan";
$isim1 = "hüseyin";
$isiM = "elif" 
?>

<?php
// $$ Kullanımı 
$ad = "merve";
$$ad = "seyma";
echo $$ad ."<br/>";
?>

<?php 
$add = "araba";
$yeni = "add";
echo $$yeni ."<br/>";
?>


<?php 
 $sayi = true;
 $sayi1 = 41.41;
 $sayi2 = 55;
 $sayi3 = false;
 echo $sayi ."<br/>";
 echo $sayi1 + $sayi2 . "<br/>";
 echo $sayi3;
?>


<?php
 //DERS_14_Array_Dizi_Oluşturma_
$name = array("adnan","hüseyin","akif","elif");
$num = array(23,25,34,7.5);
$name[4] ="seyma";
$name2 = ["merve","ebru", "aysegül"];

echo $name2[1] ."<br/>";
$name2[1] = "meryem";
echo $name2[1] ."<br/>";
echo $name[0] ."<br/>";
echo $name[4] ."<br/>";

print_r($name2);
echo "<br/>";
?>


<?php
//DERS_15_Array_Anahtar_Kelime_Atama_
$value = ["kedi","köpek","a"=>"aslan","sincap","tavşan"];
echo $value[0] ."<br/>";
echo $value[1] ."<br/>";
echo $value[2] ."<br/>";
echo $value["a"] ."<br/>";
echo $value[3] ."<br/>" ."<br/>" ."<br/>";
?>


<?php
//DERS_15_Devam_
$value2 = ["mercedes","mclaren", 4=>"alphine","williams","redbull"];
$value3 = ["a"=>"hamilton", "b" =>"norris", "c"=> "alonso", "d" => "tsunoda","e" =>"verstappen","vettel"];
echo $value2[0] ."<br/>";
echo $value2[1] ."<br/>";
echo $value2[4] ."<br/>";
echo $value2[5] ."<br/>";
echo $value2[6] ."<br/>" ."<br/>" ."<br/>";

echo $value3["a"] ."<br/>";
echo $value3["b"] ."<br/>";
echo $value3["c"] ."<br/>";
echo $value3["d"] ."<br/>";
echo $value3["e"] ."<br/>";
echo $value3[0] ."<br/>" ."<br/>" ."<br/>";
?>


<?php
//DERS_16_Çok_Boyutlu_Dizi_Oluşturma_
$student =[
    [
    ["s1","s2","s3","s4","s5"],
    ["male", "female"],
    ["1A","1B","1C"]
    ],
    [
     ["s6","s7","s8","s9","s10"],
    ["male", "female"],
    ["1A","1B","1D"]
    ]
];
echo $student[0][0][0] ." ".$student[0][1][0] ." ".$student[0][2][0] ."<br/>";
//echo $student[0][0][1] ." ".$student[0][1][1] ." ".$student[0][2][1] ."<br/>";
//echo $student[0][0][2] ." ".$student[0][1][0] ." ".$student[0][2][1] ."<br/>";
//echo $student[0][0][3] ." ".$student[0][1][1] ." ".$student[0][2][2] ."<br/>";
//echo $student[0][0][4] ." ".$student[0][1][1] ." ".$student[0][2][0] ."<br/>";
// $a=array();
echo $student[1][0][1]. " ".$student[0][1][0] ." " .$student[0][2][2] ."<br/>";
?>


<?php
// DERS_17_Çift_Tırnak_Tek_Tırnak_Farkı_
$deger = "yetmiş beş";
echo "yaşi $deger" ."<br/>";
echo 'yaşi $deger <br/> <br/> <br/>';
?>

<?php
// DERS_18_Aritmetik_Operatörler_
$sayii = 77;
$sayii2 = 12;
echo $sayii ." % " .$sayii2 ." = ? <br/>";
echo "sonucc = " .$sayii % $sayii2 ."<br/>";

$sayii3 = 27;
$sayii4 = 72;
echo "sonuc = " .$sayii3 * $sayii4 ."<br/>";

$sayii5 = 2;
$sayii6 = 3;
echo "sonuc = " .$sayii5 ** $sayii6 ."<br/> <br/>";
?>


<?php
// DERS_19_Operatörler_Arama_Operatörleri_
$numm = 11; $numm2 = $numm + 1; 
$numm2 /= $numm;
//$numm2 **= $numm;
$result = $numm + $numm2;
echo "sonuc degeri = ".$result ."<br/> <br/>";
?>


<?php
// DERS_20_Operatörler_Karşılaştırma_OPeratörleri_
//$z = 10; $t = 7;
//var_dump($z == $t);
echo "<br/>";
$z = 7; $t = "7";
$k =8; $m = 9;
$g = 11; $l = 3;
$f = 4; $p =4;
var_dump($z === $t ); //=== ikisi aynı türde mi?
echo "<br/>";
var_dump($k <=> $m);//<=> int(-1)
echo "<br/>";
var_dump($g <=> $l);//<=> int(1)
echo "<br/>";
var_dump($f <=> $p);//<=> int(0)
echo "<br/>";
?>

<?php
//DERS_21_Operatörler_Artırma_ve_Eksiltme_Operatörleri_
$nm = 21;  $nm2 = 17;
echo $nm++ ."<br/>";
echo $nm ."<br/>";
echo ++$nm2 ."<br/>";
echo $nm2 ."<br/>";
?>


<?php
//DERS_22_Operatörler_Mantıksal_OPeratörler_
$nmbr = 17; $nmbr2 = 71;
var_dump($nmbr ==10 and  $nmbr2 == 71);
echo "<br/>";
var_dump($nmbr ==10 or  $nmbr2 == 71);
echo "<br/>";
?>


<?php
// DERS_23_Operatörler_String_OPeratörleri_
$sehir = " kocaeli ";
$merkez = " izmit ";
$sehir_merkezi = $sehir.$merkez; //$sehir .= $merkez;
echo  $sehir_merkezi."<br/>" ."<br/>";
?>


<?php
// DERS_27_Kısa_İf_Else_Kullanımı_
$aa = 10; $bb = 11;
echo $aaa = $aa == 10 ? "değer 10" : "10 değil";
echo "<br/>";
echo $bbb = $bb == 10 ? "değer 11" : "10 değil" ."<br/>";
echo "<br/> <br/>";
?>


<?php
 $tt = 22; 
 switch($tt){
    case $tt < 21:
        echo  $tt ." " ."21'den küçük";
    break;
    case $tt < 23:
        echo $tt. " "."sayısı 21'den büyük . <br/> <br/>";
    break;
    default : echo  $tt. " " ." geçerli değil";
 }
?>


<?php
//DERS_30_İç_İçe_While_Kullanımı_
$r = 1; $y=1;
while($r<=10){
    echo $r." . ";
    while($y<=10){
       echo " $r x $y = ".$r * $y."||";
       $y++;
    }
echo "<br/> <br/>";
     $y = 1;
     $r++;
}
?>


<?php
$kk = "seyma";
$bb = function($namename) use ($kk){
    echo " merhaba $namename" . " ".$kk ."<b/>";
};
$bb("melek");
?>


<?php
function vvalue(){
    return "normal merhaba dünya"."<br/>";
}
echo vvalue();
$degerr = function()use ($cc){
    return "isimsiz merhaba dünya"."<br/>";
};
echo $degerr();
$cc = 10;
$bbb = fn($degerr) => "kısa".$degerr+$cc;
echo $bbb(5);
?>


<?php
function hello(): ?string{
    return null;
}
hello();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style = "background-color: blue; color: white">
    <?php
     // açiklama satiri
 # ikinci aciklama satiri
 /* coklu yorum satiri
 deneme
 deneme2 
 deneme 3 
 */
    echo "php $isim <br/>";
    Echo "php sitesi 1 ". "php sitesi 2 $isim <br/>";
    echO "php sitesi 3 <br/>"; //.$isiM <br/>";
    echo "php sitesi 5" /* php sitesi 6 */ ."<br/>";
    print "php sitesi 6 $isim1 <br/>";
    print "php sitesi 7 $isim1 <br/>" . $isiM;
    ?>
</h1>
</body>
</html>