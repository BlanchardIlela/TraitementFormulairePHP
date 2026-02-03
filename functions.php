<?php 
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

    function nav_menu(string $linkclass = ''): string
    {
      return 
        nav_item('./index.php', 'Accueil', $linkclass) .
        nav_item('./contact.php', 'Contact', $linkclass);
    }

    function checkbox(string $name, string $value, array $data): string
    {
        $attributes = '';
        if (isset($data[$name]) && in_array($value, $data[$name])) {
            $attributes .= 'checked';
           
        }
        return <<<HTML
        <input type="checkbox" name="{$name}[]" id="" value="$value" $attributes>
HTML;
    }

    function radio(string $name, string $value, array $data): string
    {
        $attributes = '';
        if (isset($data[$name]) && $value === $data[$name]) {
            $attributes .= 'checked';
           
        }
        return <<<HTML
        <input type="radio" name="{$name}" id="" value="$value" $attributes>
HTML;
    }

    function dump ($variable)
    {
        echo '<pre>';
        var_dump($variable);
        echo '</pre>';
    }

?>