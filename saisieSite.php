
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css1/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="stylenew5.css"/>
	</head>
	<body>
		<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
			<div class="panel panel-default spacer">
			<div class="panel-heading">ENREGISTREMENT SITE</div>
			<div class="panel-body">
				<form method="POST" action="AjouterSite.php" enctype="multipart/form-data">
				
				
				<div class="form-group">
						<label class="control-label" style="text-align:center">id</label>
						<input class="form-control"type="text" code="id"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label" style="text-align:center">Nom</label>
						<input type="text" name="nom" class="form-control"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">priorite</label>
						<input class="form-control"type="text" name="priorite"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">nom</label>
						<input class="form-control"type="text" name="nom"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">siren</label>
						<input class="form-control"type="text" name="siren"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">pret_install</label>
						<input class="form-control"type="text" name="pret_install"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">statut_hebergement</label>
						<input class="form-control"type="text" name="statut_hebergement"/>
				</div>
					
					
				<div class="form-group">
						<label class="control-label">acces</label>
						<input class="form-control"type="text" name="acces"/>
				</div>
					
					
				<div class="form-group">
						<label class="control-label">rp</label>
						<input class="form-control"type="text" name="rp"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">cons_dsn</label>
						<input class="form-control"type="text" name="cons_dsn"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">version_prodige</label>
						<input class="form-control"type="text" name="version_prodige"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">version_agirh</label>
						<input class="form-control"type="text" name="version_prodige"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">mirth</label>
						<input class="form-control"type="text" name="version_prodige"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">ifp</label>
						<input class="form-control"type="text" name="version_prodige"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">ws_ph7</label>
						<input class="form-control"type="text" name="version_prodige"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">config_prodige</label>
						<input class="form-control"type="text" name="version_prodige"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">config_agirh</label>
						<input class="form-control"type="text" name="version_prodige"/>
				</div>
				
			   
				<div class="form-group">
						<label class="control-label">nom_absence</label>
						<input class="form-control"type="text" name="version_prodige"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">nom_statut</label>
						<input class="form-control"type="text" name="version_prodige"/>
				</div>
				
				
				<div class="form-group">
						<label class="control-label">nom_emploi</label>
						<input class="form-control"type="text" name="version_prodige"/>
				</div>
				
				
				<div>
						<input type="submit"       name="OK" class="btn btn-info"      value="Enregistrer"/>
						<input href="index-2.php"            class="btn btn-danger"    value="Retour"/>
					</div>
				</form>
			</div>
		</div>
		</div>
	</body>
</html>