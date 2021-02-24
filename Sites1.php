<?php
	require_once("conn.php");
	$mc="";
	$size=4;
	if (isset($_GET['page'])) {
		$page=$_GET['page'];
	}
	else{
		$page=0;
	}
	$offset=$size*$page;
	if (isset($_GET['motcle'])) {
		$mc=$_GET['motcle'];

		$req="SELECT * FROM gestion_site WHERE NOM like '%$mc%' LIMIT $size OFFSET  $offset";
	}
	else{
		$req="SELECT * FROM gestion_site LIMIT $size OFFSET  $offset";
	}
	
	$ps=$pdo->prepare($req);
	$ps->execute();
	if (isset($_GET['motcle'])) {
		$ps2=$pdo->prepare("SELECT COUNT(*) AS NB_ET FROM gestion_site WHERE NOM like '%$mc%'");
	}
	else{
		$ps2=$pdo->prepare("SELECT COUNT(*) AS NB_ET FROM gestion_site");
	}

	$ps2->execute();
	$ligne=$ps2->fetch(PDO::FETCH_ASSOC);
	$NBE=$ligne['NB_ET'];
	if (($NBE % $size)==0) $NbPages=floor($NBE / $size);
		
	else $NbPages=floor($NBE / $size)+1;
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css1" href="css1/moncss.css"/>
		<link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css">
		<script src="bootstrap1/js/jquery.js"></script>
		<script src="bootstrap1/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
	</head>
	<body>
	<div class="col-md-12 col-xs-12 spacer">
		<form method="get" action="site.php">
			<div class="form-group">
				<label class="control-label">Mot Clé</label>
				<input type="text" name="motcle" value="<?php echo($mc)?>"/>
				<button type="submit">Rechercher</button>
				
				<button><a href="ajoutSite.php?code=<?php echo($et['id']) ?>">Nouveau</a></button>
				<button><a href="editerSite.php?code=<?php echo($et['id']) ?>">Modifier</a></button>
				<button><a onclick="return confirm('Etes vous sure?..');" href="supprimerSite.php?code=<?php echo($et['id']) ?>">Supprimer</a></button>
				
			</div>			
		</form>
	</div>
	 <div class="col-md-12 col-xs-12 ">
	 	<div  class="pannel panel-info spacer">
	 		<div>Liste des Sites</div>
	 		<div class="panel-body">
	 			<table class="table table-striped">
					<thead>
					<tr>
						<th>id</th><th>priorite</th><th>nom</th><th>siren</th><th>pret_install</th><th>statut_hebergement</th><th>acces</th><th>rp</th><th>cons_dsn</th><th>version_prodige</th><th>version_agirh</th><th>mirth</th><th>ifp</th><th>ws_ph7</th><th>conf_prodige</th><th>conf_agirh</th><th>nom_abscence</th><th>nom_statut</th><th>nom_emploi</th>
					</tr>
					</thead>
					<TBODY>
						<?php while ($et=$ps->fetch()) {?>
							<tr>
								<td><?php echo($et['id']) ?></td>
								<td><?php echo($et['priorite']) ?></td>
								<td><?php echo($et['nom']) ?></td>
								<td><?php echo($et['siren']) ?></td>
								<td><?php echo($et['pret_install']) ?></td>
								<td><?php echo($et['statut_hebergement']) ?></td>
								<td><?php echo($et['acces']) ?></td>
								<td><?php echo($et['rp']) ?></td>
								<td><?php echo($et['cons_dsn']) ?></td>
								<td><?php echo($et['version_prodige']) ?></td>
								<td><?php echo($et['version_agirh']) ?></td>
								<td><?php echo($et['mirth']) ?></td>
								<td><?php echo($et['ifp']) ?></td>
								<td><?php echo($et['ws_ph7']) ?></td>
								<td><?php echo($et['conf_prodige']) ?></td>
								<td><?php echo($et['conf_agirh']) ?></td>
								<td><?php echo($et['nom_abscence']) ?></td>
								<td><?php echo($et['nom_statut']) ?></td>
								<td><?php echo($et['nom_emploi']) ?></td>
								</tr>
						<?php } ?>
					</TBODY>
				</table>
	 		</div>
	 		<div>
	 			<ul class="nav nav-pills">
	 				<?php for ($i=0;$i<$NbPages;$i++) {?>
	 					<li class="<?php echo(($i==$page)? 'active':''); ?>">
	 						<a href="Site.php?page=<?php echo($i)?>&mocle=<?php echo($mc)?>">Page <?php echo($i)?></a>
	 					</li>
	 				<?php }?>
	 			</ul>
	 		</div>
	 	</div>
	 </div>
	</body>
</html>