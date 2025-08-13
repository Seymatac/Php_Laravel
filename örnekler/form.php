<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dersleri</title>
</head>
<body>
    <div class="container">
        <div class="bg-primary-subtle border border-secondary arka">
            <div class="col-md-4 mx-auto">
                <form action="gonder.php" method="get">
                    <div class="mb-3">
                        <label for="mail" class="form-label">User mail:</label>
                        <input type="email" class="form-control" id="mail" name="mail">
                    </div>
                    <div class="mb-3">
                        <label for="sifre" class="form-label">Sifre:</label>
                        <input type="password" class="form-control" id="sifre" name="sifre">
                    </div>
                    <button type="reset" class="btn btn-danger">İptal</button>
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>

                <?php
                // Form gönderildiyse verileri güvenli şekilde al
                $mail = isset($_GET["mail"]) ? $_GET["mail"] : "";
                $sifre = isset($_GET["sifre"]) ? $_GET["sifre"] : "";

                // Güvenlik için htmlspecialchars kullan
                echo "mail = " . htmlspecialchars($mail) . "<br> sifre = " . htmlspecialchars($sifre);
                ?>
            </div>
        </div>
    </div>
</body>
</html>
