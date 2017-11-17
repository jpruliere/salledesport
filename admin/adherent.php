<?php
	session_start();
	if (!isset($_GET['action'])) header('Location: ?action=index');
	if (!isset($_SESSION['role']) || $_SESSION['role'] != 'adherent') header('Location: ../');
	require('../scripts/connexion.php');
	$baseUrl = 'http://localhost/wf3/salledesport/';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Espace connecté - The Muscle Shop</title> 

    <link href="<?=$baseUrl;?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=$baseUrl;?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=$baseUrl;?>css/style-admin.css">
</head>
<body class="container-fluid">
	<div class="row">
		<header class="col-md-3 col-sm-4 admin-menu">
			<h1><img src="<?=$baseUrl;?>img/logo.png"/></h1>
			<h3>Espace connecté</h3>
			<ul id="menu-actions">
				<li><a href="?action=seance.lister">Voir les séances</a></li>
				<li><a href="<?=$baseUrl;?>/login/deconnexion.php">Se déconnecter</a></li>
			</ul>
		</header>
		<main class="col-md-9 col-sm-8">
			<?php require_once('actions/'.$_SESSION['role'].'.'.$_GET['action'].'.php'); ?>
		</main>
	</div>
</body>
</html>