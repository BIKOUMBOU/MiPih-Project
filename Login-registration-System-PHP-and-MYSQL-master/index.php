<!DOCTYPE html>
<html>
<head>
	<title>MiPih|Connexion </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Se connecter</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Identifiant</label>
     	<input type="text" name="uname" placeholder="Veuillez entrer votre identifiant"><br>

     	<label>Mot de passe</label>
     	<input type="password" name="password" placeholder="Veuillez entrer votre mot de passe"><br>

     	<button type="submit">Se connecter</button>
          <a href="signup.php" class="ca">Créer un compte</a>
     </form>
</body>
</html>