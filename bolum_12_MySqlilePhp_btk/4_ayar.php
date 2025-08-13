
<?php

define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "coursedb");

$baglanti = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

if(mysqli_connect_errno() > 0){
    die("Bağlanti hatasi: " . mysqli_connect_error());
}
?>
