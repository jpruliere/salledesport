<?php require_once('../parts/header.php'); ?>
<section class="super-splash super-splash-modal">
<form class="form-modal" action="traitement.php" method="post">
	<h3>Connexion adhérent</h3>
	<hr>
	<div class="form-group">
		<label for="email">Adresse email ou numéro d'adhérent</label>
		<input type="text" class="form-control" id="email" name="email" placeholder="XXXXXXXX ou xxx@yyy.zzz">
	</div>
	<div class="form-group">
		<label for="mdp">Mot de passe</label>
		<input type="password" class="form-control" id="mdp" name="mdp">
	</div>
	<button type="submit" class="btn btn-default">Se connecter</button>
	<input type="hidden" name="adherent" value="adherent">
</form>
</section>
<?php require_once('../parts/footer.php'); ?>