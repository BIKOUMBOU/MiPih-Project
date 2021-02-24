<!DOCTYPE html>
<html>
<head>
	<title>Créer un compte</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>S'enregister</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Nom</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Entrer votre nom"><br>
          <?php }?>

          <label>Identifiant</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Entrer votre dentifiant"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Entrer votre identifiant"><br>
          <?php }?>


     	<label>Mot de passe</label>
     	<input type="password" 
                 name="Mot de passe" 
                 placeholder="Entrer votre  mot de passe"><br>

          <label>Confirmation du mot de passe</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Confirmer votre mot de passe"><br>

     	<button type="submit">Enregister</button>
          <a href="index.php" class="ca">Vous avez déjà un compte ?</a>
     </form>
</body>
</html>