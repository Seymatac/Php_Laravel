<?php
require "libs/variables.php";
require "libs/functions.php";
session_start();
include "partials/_message.php";
include "partials/_header.php";
include "partials/_navbar.php";

$baslikErr = $baslik = "";
$altBaslikErr = $altBaslik = "";
$resimErr = $resim = "";
$kategoriErr = "";
$kategori_id = 0;
$onay = 0;
$aciklamaErr =$aciklama = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["baslik"])) {
        $baslikErr = "Başlık için gerekli alan.";
    } else {
        $baslik = safe_html($_POST["baslik"]);
    }

    if (empty($_POST["altBaslik"])) {
        $altBaslikErr = "Alt başlık için gerekli alan.";
    } else {
        $altBaslik = safe_html($_POST["altBaslik"]);
    }
    if (empty($_POST["aciklama"])) {
        $aciklamaErr = "Açıklama için gerekli alan.";
    } else {
        $aciklama = safe_html($_POST["aciklama"]);
    }

    if (empty($_FILES["imageFile"]["name"])) {
        $resimErr = "Resim seçiniz.";
    } else {
        uploadImage($_FILES["imageFile"]);
        $resim = $_FILES["imageFile"]["name"];
    }

    if (empty($_POST["kategori_id"]) || $_POST["kategori_id"] == "0") {
        $kategoriErr = "Kategori seçiniz.";
    } else {
        $kategori_id = intval($_POST["kategori_id"]);
    }

    $onay = isset($_POST["onay"]) ? 1 : 0;

    if (empty($baslikErr) && empty($altBaslikErr) && empty($resimErr) && empty($kategoriErr)) {
        createCourse($baslik, $altBaslik,$aciklama, $resim, $onay, $kategori_id);
        $_SESSION["message"] = $baslik . " isimli kurs eklendi.";
        $_SESSION["type"] = "success";
        header('Location: admin-courses.php');
        exit;
    }
}
?>

<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="baslik">Başlık</label>
                        <input type="text" name="baslik" class="form-control" value="<?php echo htmlspecialchars($baslik); ?>">
                        <div class="text-danger"><?php echo $baslikErr; ?></div>
                    </div>

                    <div class="mb-3">
                        <label for="altBaslik">Alt Başlık</label>
                        <input type="text" name="altBaslik" class="form-control" value="<?php echo htmlspecialchars($altBaslik); ?>">
                        <div class="text-danger"><?php echo $altBaslikErr; ?></div>
                    </div>

                           <div class="mb-3">
                        <label for="aciklama">Açıklama</label>
                        <input type="text" name="aciklama" class="form-control" value="<?php echo $aciklama; ?>">
                        <div class="text-danger"><?php echo $aciklamaErr; ?></div>
                    </div>

                
                    <div class="input-group mb-3">
                        <input type="file" name="imageFile" id="imageFile" class="form-control">
                        <label for="imageFile" class="input-group-text">Yükle</label>
                    </div>
                    <div class="text-danger mb-3"><?php echo $resimErr; ?></div>

                    <div class="mb-3">
                        <label for="kategori">Kategori</label>
                        <select name="kategori_id" id="kategori" class="form-select">
                            <option value="0" <?php echo ($kategori_id == 0) ? "selected" : ""; ?>>Kategori seçiniz</option>
                            <?php foreach(getCategories() as $c): ?>
                                <option value="<?php echo $c["id"]; ?>" <?php echo ($kategori_id == $c["id"]) ? "selected" : ""; ?>>
                                    <?php echo $c["kategori_adi"]; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <div class="text-danger"><?php echo $kategoriErr; ?></div>
                    </div>

                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" name="onay" id="onay" <?php if ($onay) echo "checked"; ?>>
                        <label class="form-check-label" for="onay">Onay</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "partials/_editor.php"; ?>
<?php include "partials/_footer.php"; ?>
