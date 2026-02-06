<?php 
$title = "Nous contacter";
require_once 'config.php';
require_once 'functions.php';
date_default_timezone_set('Africa/Kinshasa');
// Récupérer l'heure d'aujourd'hui $heure
$heure = (int)date('G');
// Récupérer les créneaux d'aujourd'hui $creneaux
$creneaux = CRENEAUX[date('N') - 1];
$ouvert = in_creneaux($heure, $creneaux);
$color = $ouvert ? 'green' : 'red';
require 'header.php'; 
?>

<div class="row">
    <div class="col-md-8">
        <h2>Nous contacter</h2>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor quibusdam in dolorum. Distinctio cumque nihil nulla excepturi rerum, nobis, porro, praesentium quas fuga sapiente explicabo fugiat? Ipsa tempora nostrum nam.
        </p>
    </div>
    <div class="col-md-4">
        <h2>Horaire d'ouverture</h2>
        <?php if($ouvert): ?>
            <div class="alert alert-success">
                Le magasin est ouvert
            </div>
        <?php else: ?>
            <div class="alert alert-danger">
                Le magasin est fermé
            </div>
        <?php endif; ?>
        <ul>
            <?php foreach(JOURS as $k => $jour): ?>
                <li <?php if($k + 1 === (int)date('N')): ?> style="color: <?= $color ?>" <?php endif ?>>
                    <strong><?= $jour ?></strong> :
                    <?= creneaux_html(CRENEAUX[$k]); ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>



<?php require 'footer.php'; ?>