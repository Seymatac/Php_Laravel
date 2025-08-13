<?php

$myfile = fopen("couse.json", "r");
$mysize = filesize("couse.json");

$jsonString = fread($myfile, $mysize);

echo $jsonString;
echo "<br>";
echo gettype($jsonString); //string
echo "<br>";
//echo $jsonString["title"];

/* Dosyadan okumuş olduğumuz string veriyi,
 uygulama tarafındaki bir diziye çevirme.
 string to array -> decode */

$jsonArray = json_decode($jsonString, true);
echo $jsonArray["title"];
echo "<br>";
echo $jsonArray["description"];
echo "<br>";
echo $jsonArray["image"];

//echo fread($myfile, $mysize);
//echo gettype(fread($myfile, $mysize)) ;
?>