<?php 
if (!function_exists('nav_item')) {
    function nav_item (string $lien, string $titre, string $linkclass = ''): string
    {
        $classe = 'nav-item';
        if (basename($_SERVER['SCRIPT_NAME']) === basename($lien)) {
        $classe .= ' active';
        }
        return <<<HTML
        <li class="$classe">
        <a class="$linkclass" href="$lien">$titre</a>
        </li>
HTML;
    }
}

?>

<?= nav_item('./index.php', 'Accueil', $class) ?>
<?= nav_item('./contact.php', 'Contact', $class) ?>