<!DOCTYPE html>
<html>
<title>MiPih DIFFTECH | Login </title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylew3.css">
<body>

<div class="w3-container">
  <h2>Bienvenue à MiPih Suivi Installation</h2>

  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Se connecter</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:400px">
        
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <img src="avatar1.jpg" alt="Avatar" style="width:50%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <label><b>Nom d'utilisateur</b></label>
          <input  class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Entrez votre identifiant" name="usrname" required>
          <label><b>Mot de passe</b></label>
          <input  class="w3-input w3-border" type="text" placeholder="Entrer votre mot de Passe" name="psw" required>
          <input  type="button" value="Se connecter" onclick="window.location.href='principale.php';" />
          <input  type="button" value="Créer un compte" onclick="window.location.href='inscription.php';" />
        
         
          <input  class="w3-check w3-margin-top" type="checkbox" checked="checked"> Se souvenir de moi
        </div>
      </form>
 
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Annuler</button>
        <span class="w3-right w3-padding w3-hide-small">mot de passe <a href="#"> oublié ?</a></span>
      </div>

    </div>
  </div>
</div>
            
</body>
</html>
