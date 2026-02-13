<?php
require 'elements/header.php';
?>

<form action="" method="post">
    <div class="form-group">
        <label for="birthday">Section réservée aux adultes, entrer votre année de naissance</label>
        <select name="birthday" id="birthday" class="form-control">
            <?php for($i = 2010; $i > 1919; $i--): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor ?>
        </select>
    </div>
    <button class="btn btn-primary" type="submit">Envoyer</button>
</form>

<?php require 'elements/footer.php'; ?>