<?php 
require 'elements/header.php';
?>

<h1>S'inscrire à la newsletter</h1>

<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia fugiat voluptates dolor minima est, recusandae repellendus vero quod? Eaque aspernatur quae cupiditate velit minima quod quam blanditiis quo incidunt placeat?
</p>

<form action="/newsletter.php" method="post" class="form-inline">
    <div class="form-group">
        <input type="email" name="email" id="" placeholder="Entrer votre email" required class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>

<?php require 'elements/footer.php'; ?>