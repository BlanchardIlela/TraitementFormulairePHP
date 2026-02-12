<?php
$title = "Notre menu";
$menu = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'menu.tsv');
require 'elements/header.php';
?>

<h1>Menu</h1>

<?php require 'elements/footer.php'; ?>