<?php
// Sous WAMP
try{
	$bdd = new PDO('mysql:host=localhost;dbname=suivi_dsn', 'root', '');
}
catch (Exception $bdd)
{
	echo 'Erreur';
}

foreach($bdd->query('SELECT * from suivi_dsn.site') as $row) {
	print_r($row);
}
print('fin du programme');

?>