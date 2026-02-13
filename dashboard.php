<?php 
require 'functions/compteur.php';
$total = nombre_vues();
require 'elements/header.php';
?>

<div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <strong class="font-size:3em"><?= $total ?></strong><br>
                Visite<?= $total > 1 ? 's': '' ?> total
            </div>
        </div>
    </div>
</div>

<?php require 'elements/footer.php'; ?>