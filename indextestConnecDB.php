<?php
// Sous WAMP
try{
	$bdd = new PDO('mysql:localhost;dbname=suivi_instalation_dsn', 'root', 'root');
}
catch (Exception $bdd)
{
	echo 'Erreur';
}

foreach($bdd->query('SELECT * from suivi_instalation_dsn.site') as $row) {
	print_r($row);
}
print('fin du programme');

?>