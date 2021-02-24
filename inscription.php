<!DOCTYPE html>
<html>
<title>MiPih DIFFTECH | Inscription </title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylew5.css">

<body>
<h3>Formulaire d'inscription</h3>
    
  <div class="w3-container">

  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">S'incrire</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:400px">
        
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <img src="avatar1.jpg" alt="Avatar" style="width:40%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          
            <label><b>Nom </b></label>
          <input  class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Entrez votre nom..." name="name" required>
    
            <label><b>Prénom</b></label>
          <input  class="w3-input w3-border" type="text" placeholder="Entrer votre prénom..." name="lastname" required>
            
            <label><b>Adresse mail</b></label>
          <input  class="w3-input w3-border" type="text" placeholder="Entrer votre adresse mail..." name="mai" required>
            
            <label><b>Confirmation de votre mail</b></label>
          <input  class="w3-input w3-border" type="text" placeholder="Confirmer votre adresse mail....." name="psw" required>
            
            <label><b>Mot de passe</b></label>
          <input  class="w3-input w3-border" type="text" placeholder="Entrer votre mot de Passe..." name="psw" required>
            
            <label><b>Confirmation de votre mot de passe</b></label>
          <input  class="w3-input w3-border" type="text" placeholder="Confirmer votre mot de passe..." name="psw" required>
        
          <button class="w3-button w3-block w3-green w3-section w3-padding"  type="submit">Enregistrer</button>
    
        </div>
          
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Annuler</button>
       
      </div>

    </div>
  </div>
</div>

</body>
</html>