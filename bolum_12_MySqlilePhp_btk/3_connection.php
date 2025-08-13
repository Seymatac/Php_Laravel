<?php

// sunucu => coursedb
// php => mysqli
// php => pdo => nesne tabanlı


const host = "localhost";
const username = "root";
const password = "";
const database = "coursedb";
//const database = "coursedb2"; hata verir 

$baglanti = mysqli_connect(host, username, password, database );

if(mysqli_connect_errno() > 0){
    die("hata".mysqli_connect_errno());
}
echo "mysql bağlantisi olusturuldu. <br>";

// sql sorgularını yazacağız

mysqli_close($baglanti);

echo "mysql baglantisi kapatildi.";

?>