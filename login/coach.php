<?php require_once('../parts/header.php'); ?>
<section class="super-splash super-splash-modal">
<form class="form-modal" action="traitement.php" method="post">
	<h3>Connexion coach</h3>
	<hr>
	<div class="form-group">
		<label for="email">Adresse email ou numéro de licence</label>
		<input type="text" class="form-control" id="email" name="email" placeholder="XXXXXXXXXXXXXXXX ou xxx@yyy.zzz">
	</div>
	<div class="form-group">
		<label for="mdp">Mot de passe</label>
		<input type="password" class="form-control" id="mdp" name="mdp">
	</div>
	<button type="submit" class="btn btn-default">Se connecter</button>
</form>
</section>
<?php require_once('../parts/footer.php'); ?>