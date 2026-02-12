<?php
require_once 'functions.php';
$title = "Notre menu";
$lignes = file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'menu.tsv');
foreach ($lignes as $k => $ligne) {
    $lignes[$k] = explode("\t", trim($ligne));
}
require 'elements/header.php';
?>

<h1>Menu</h1>

<?= dump($lignes) ?>

<?php require 'elements/footer.php'; ?>