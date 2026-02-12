<?php
$title = "Notre menu";
$menu = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'menu.tsv');
$lignes = explode(PHP_EOL, $menu);
require 'elements/header.php';
?>

<h1>Menu</h1>

<?= dump($lignes) ?>

<?php require 'elements/footer.php'; ?>