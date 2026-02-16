<?php
require 'elements/header.php'
?>

<form action="login.php" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="pseudo" id="" placeholder="Nom d'utilisateur">
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="motdepasse" id="" placeholder="Votre mot de passe">
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php require 'elements/footer.php' ?>