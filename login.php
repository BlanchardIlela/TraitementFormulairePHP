<?php
$erreur = null;
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'John' && $_POST['motdepasse'] === 'Doe') {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: dashboard.php');
    }else {
        $erreur = "Identifiant incorrects";
    }
}

require 'functions/auth.php';
if (est_connecte()) {
    header('Location: ./dashboard.php');
    exit();
}

require 'elements/header.php'
?>

<?php if($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php endif ?>

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