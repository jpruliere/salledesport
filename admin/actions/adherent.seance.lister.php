<?php
	require_once(__DIR__.'/../../scripts/connexion.php');
	$seances = $pdo->query("SELECT seance.*, adherent_seance.id IS NOT NULL inscrit FROM seance LEFT JOIN adherent_seance ON adherent_seance.idSeance = seance.id AND adherent_seance.idAdherent = ".$_SESSION['id']." ORDER BY heureDebut DESC;")->fetchAll(PDO::FETCH_ASSOC);
?>
<ul id="seances">
<?php foreach ($seances as $seance): ?>
	<li <?php if ($seance['inscrit']): ?>class="inscrit"<?php endif; ?>><?= date('d/m/Y', strtotime($seance['heureDebut'])); ?> - <?= $seance['intitule']; ?></li>
<?php endforeach; ?>
</ul>