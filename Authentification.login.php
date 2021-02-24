<!DOCTYPE html>

<html lang="fr-FR"> 
     <head>

         <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <meta http-equiv="Content-Language" content="fr-FR">
		      <title>MiPih DIFFTECH | Authentification </title>
		       <link rel="stylesheet" href="style2.css" type="text/css" />
     </head>
		 
<?php
/*
Page: connexion.php
*/
session_start(); // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'suivi_instalation_dsn';
    $db_host     = 'localhost';
    $db = mysql_connect($db_localhost, $db_root, $db_password,$db_suivi_installation_dsn)
           or die('could not connect to database');
    
   


   // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysql_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysql_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
        $exec_requete = mysql_query($db,$requete);
        $reponse      = mysql_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: principale.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysql_close($db); // fermer la connexion
?>