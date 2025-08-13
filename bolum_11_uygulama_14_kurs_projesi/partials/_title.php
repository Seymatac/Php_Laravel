<?php
$sanitizedTitle = isset($title) ? htmlspecialchars($title, ENT_QUOTES, 'UTF-8') : 'Varsayılan Başlık';
?>
<h1 class="mb-3"><?= $sanitizedTitle ?></h1>
<p class="lead">
   <!--  <?php echo count($kategoriler) ?> kategoride <?php echo count($kurslar) ?> kurs listelenmiştir -->
</p>
