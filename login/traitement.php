<?php
	session_start();
	require_once('../scripts/connexion.php');

	$p = $_POST;

	if (isset($p['adherent'])) {
		if (strpos($p['email'], '@') !== false) { // adresse email passée
			$stmt = $pdo->prepare("SELECT id, CONCAT_WS(' ', prenom, nom) nomComplet, motDePasse mdp FROM adherent WHERE email = :login");
		} else { // numéro passé
			$stmt = $pdo->prepare("SELECT id, CONCAT_WS(' ', prenom, nom) nomComplet, motDePasse mdp FROM adherent WHERE numero = :login");
		}
		$stmt->execute(['login' => $p['email']]);
		$res = $stmt->fetch(PDO::FETCH_ASSOC);
		if (!$res || !password_verify($p['mdp'], $res['mdp'])) {
			header('Location: adherent.php?err&login='.$p['email']);
			exit;
		} else {
			$_SESSION['role'] = 'adherent';
			$_SESSION['id'] = $res['id'];
			$_SESSION['nom'] = $res['nomComplet'];
			header('Location: ../admin/adherent.php?action=index');
			exit;
		}
	} elseif (isset($p['coach'])) {
		if (strpos($p['email'], '@') !== false) { // adresse email passée
			$stmt = $pdo->prepare('SELECT id, nomComplet, motDePasse mdp FROM coach WHERE email = :login');
		} else { // numéro passé
			$stmt = $pdo->prepare('SELECT id, nomComplet, motDePasse mdp FROM coach WHERE numeroLicence = :login');
		}
		$stmt->execute(['login' => $p['email']]);
		$res = $stmt->fetch(PDO::FETCH_ASSOC);
		if (password_verify($p['mdp'], $res['mdp'])) {
			header('Location: coach.php?err&login='.$p['email']);
			exit;
		} else {
			$_SESSION['role'] = 'coach';
			$_SESSION['id'] = $res['id'];
			$_SESSION['nom'] = $res['nomComplet'];
			header('Location: ../admin/coach.php?action=index');
			exit;
		}
	}
	header('Location: ../');
?>