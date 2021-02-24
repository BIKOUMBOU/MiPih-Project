<!DOCTYPE html>
<html>
<title>MiPih DIFFTECH |lecture de base de données</title></title>
<html>
<head>
<title>Fichier "lire.php" - lecture d'une BDD MySQL</title>
<meta name="robots" content="noindex, nofollow">
</head>
<body>
<?php
require ("connect.php");
$connexion=mysql_connect(localhost, admin, admin);
if (!$connexion)
{echo "LA CONNEXION AU SERVEUR MYSQL A ECHOUE\n"; exit;}
mysql_select_db(BDD);
print "La base de données est ouverte";echo "<br/>";
$reponse = mysql_query("SELECT * FROM utilisateur");
while ($ligne=mysql_fetch_array($reponse))
{
echo $ligne['nom']; echo "&nbsp;&nbsp;";

echo $ligne['prenom']; echo "&nbsp;&nbsp;"; 

echo $ligne['identifiant']; echo "&nbsp;&nbsp;";

echo $ligne['annee']; echo "&nbsp;&nbsp;";

echo "<br/>";
}
mysql_close();
?>
</body>
</html>