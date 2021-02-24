<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="#home">Acceuil</a>
  <a href="#news">Tableau de bord</a>
  <div class="dropdown">
    
    <button class="dropbtn">Diffuseur Technique
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Gérer les sites</a>
      <a href="#">Ajouter un nouveau site</a>
      <a href="#">Mise à jour</a>
    </div>
      
      <button class="dropbtn">Consultant dsn
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Gérer </a>
      <a href="#">Ajouter </a>
      <a href="#">Mise à jour</a>
    </div>
      
      <button class="dropbtn">Responsable projet
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Mes sites</a>
      <a href="#">Nouveau site</a>
      <a href="#">Mise à jour</a>
    </div>
    
  </div> 
</div>

<div class="container-fluid">
  <h3>Brand / Logo</h3>
  <p>When using the .navbar-brand class on images, Bootstrap 4 will automatically style the image to fit the navbar.</p>
</div> 
    

    
    

</body>
</html>
