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

    function creneaux_html (array $creneaux) {
        if (empty($creneaux)) {
            return 'Fermé';
        }
        $phrases = [];
        foreach ($creneaux as $creneau) {
            $phrases[] = "de <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
        }
        return 'Ouvert ' . implode(' et ', $phrases);
    }

    function in_creneaux (int $heure, array $creneaux): bool
    {
        foreach ($creneaux as $creneau) {
            $debut = $creneau[0];
            $fin = $creneau[1];
            if ($heure >= $debut && $heure < $fin) {
                return true;
            }
        }
        return false;
    }

?>