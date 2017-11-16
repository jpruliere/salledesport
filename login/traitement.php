<?php
	require('../scripts/connexion.php');

	$p = $_POST;

	if (isset($p['adherent'])) {
		if (strpos($p['email'], '@') !== false) { // adresse email passée
			$stmt = $pdo->prepare('SELECT id, motDePasse mdp FROM adherent WHERE email = :login');
		} else { // numéro passé
			$stmt = $pdo->prepare('SELECT id, motDePasse mdp FROM adherent WHERE numero = :login');
		}
		$stmt->execute(['login' => $p['email']]);
		$res = $stmt->fetch(PDO::FETCH_ASSOC);
		if (password_verify($p['mdp'], $res['mdp'])) {
			echo 'Connecté';
		} else {
			echo 'Pas connecté';
		}
	} elseif (isset($p['coach'])) {
		if (strpos($p['email'], '@') !== false) { // adresse email passée
			$stmt = $pdo->prepare('SELECT id, motDePasse mdp FROM coach WHERE email = :login');
		} else { // numéro passé
			$stmt = $pdo->prepare('SELECT id, motDePasse mdp FROM coach WHERE numeroLicence = :login');
		}
		$stmt->execute(['login' => $p['email']]);
		$res = $stmt->fetch(PDO::FETCH_ASSOC);
		if (password_verify($p['mdp'], $res['mdp'])) {
			echo 'Connecté';
		} else {
			echo 'Pas connecté';
		}
	}
?>