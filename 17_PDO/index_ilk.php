<?php
include_once('baglanti.php');

//$sql = "SELECT * FROM products";
//$results = $pdo->query($sql);

/*while ($row = $results->fetch()) {
    echo htmlspecialchars($row->title, ENT_QUOTES, 'UTF-8') . " - " . htmlspecialchars($row->price, ENT_QUOTES, 'UTF-8') . "<br>";
}*/

/*$urunler = $results->fetchAll();

foreach ($urunler as $urun) {
    echo $urun->title."<br>";} */

/* prepared 
$price = 30000;
$sql = "SELECT * from products WHERE price>?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$price]);
$urunler = $stmt->fetchAll();

foreach ($urunler as $urun) {
echo $urun->title."<br>";}*/

//insert data

//include_once('baglanti.php'); // burası $pdo'yu tanımlar

// $title = "Samsung S23";
// $price = 30000;
// $description = "güzel telefon";

// $sql = "INSERT INTO products (title, price, description) VALUES (:title, :price, :description)";

// $stmt = $pdo->prepare($sql);
// $stmt->execute([
//     ':title' => $title,
//     ':price' => $price,
//     ':description' => $description,
// ]);

// echo "Kayıt eklendi";


// // multiple insert

// $title = "Samsung S24";
// $price = 30000;
// $description = "güzel telefon";

// $sql = "INSERT INTO  products(title,price,description) VALUES:title,:price,:description)";
// $stmt = $pdo->prepare($sql);

// $stmt->bindParam(':title',$title);
// $stmt->bindParam(':price',$price);
// $stmt->bindParam(':description',$description);

// $stmt->execute();

// $title = "Samsung S26";
// $price = 30000;
// $description = "güzel telefon";

// $stmt->execute();

// kayıt güncelleme

// $id = 1;
// $title = "updated";
// $sql = "UPDATE products SET title = :title WHERE id=:id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id'=> $id,'title'=> $title]);   

// echo "güncellendi ".$stmt->rowCount();


//kayıt silme 

$id = 1;

$sql = "DELETE from products WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id'=> $id]);   

echo "silindi ".$stmt->rowCount();