<?php
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

	$base = mysql_connect ('localhost', 'root', '1234');
	mysql_select_db ('suivi_installation_dsn', $base);

	// on teste si une entrée de la base contient ce couple login / pass
	$sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'" AND pass_md5="'.mysql_escape_string(md5($_POST['pass'])).'"';
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	$data = mysql_fetch_array($req);

	mysql_free_result($req);
	mysql_close();

	// si on obtient une réponse, alors l'utilisateur est un membre
	if ($data[0] == 1) {
		session_start();
		$_SESSION['login'] = $_POST['login'];
		header('Location: membre.php');
		exit();
	}
	// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
	elseif ($data[0] == 0) {
		$erreur = 'Compte non reconnu.';
	}
	// sinon, alors la, il y a un gros problème :)
	else {
		$erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}
?>
<!DOCTYPE html>

<html lang="fr-FR"> 
     <head>


     <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta http-equiv="Content-Language" content="fr-FR">

		 <title>MiPih DIFFTECH | Login </title>
		 <!-- importer le fichier de style -->
		 <link rel="stylesheet" href="stylenew3.css" type="text/css" />		
	 </head>		   
 
<body>
        <div id="container">
            <!-- zone de connexion -->
		
            <form action="verification.php" method="POST">
				<h1  class="blanc">Connexion</h1>
                
			 <div class "form-group">	
                <label class="blanc"><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" class="form-control" required>
			 </div>

             
			 <div class "form-group">	
                <label class="blanc"><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" class="form-control" required>
			 </div>
			 
                <input type="submit" id='submit' value='Se connecter' >
				
				<input type="submit" id='submit' value='Vous inscrire' >
		
				<form action="onclick="a onclick="window.open(" href="inscription.php">
				
				
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
		<a href="inscription.php">Vous inscrire</a>
<?php
         if (isset($erreur)) echo '<br /><br />',$erreur;
?>
		
    </body>
</html>



     