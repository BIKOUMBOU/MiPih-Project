<?php
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
	// on teste l'existence de nos variables. On teste également si elles ne sont pas vides
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass'])) && (isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm']))) {
	// on teste les deux mots de passe
	if ($_POST['pass'] != $_POST['pass_confirm']) {
		$erreur = 'Les 2 mots de passe sont différents.';
	}
	else {
		$base = mysql_connect ('serveur', 'login', 'password');
		mysql_select_db ('nom_base', $base);

		// on recherche si ce login est déjà utilisé par un autre membre
		$sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'"';
		$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
		$data = mysql_fetch_array($req);

		if ($data[0] == 0) {
		$sql = 'INSERT INTO membre VALUES("", "'.mysql_escape_string($_POST['login']).'", "'.mysql_escape_string(md5($_POST['pass'])).'")';
		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

		session_start();
		$_SESSION['login'] = $_POST['login'];
		header('Location: membre.php');
		exit();
		}
		else {
		$erreur = 'Un membre possède déjà ce login.';
		}
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}
?>
<html>
<head>
<title>MiPih DIFFTECH | Login</title>
          <meta charset="utf-8">
              <!-- importer le fichier de style -->
              <link rel="stylesheet" href="Stylenew1.css" media="screen" type="text/css" />
</head>

      <body>
        <div id="container">
            <!-- zone de connexion -->
		
            <form action="verification.php" method="POST">
				<h1  class="blanc">Connexion</h1>
                
                <label class="blanc"><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label class="blanc"><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='Se connecter' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
				<a href="page_add_utilisateur.php">Créer mon compte</a>
						&nbsp&nbsp&nbsp&nbsp&nbsp
						<a href="page_demande_pwd.php">Mot de passe oublié</a>
						
            </form>
        </div>
    </body>
</html>










