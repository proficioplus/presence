<?php
	// Connexion à l'instance MySQL
	$cnx = mysql_connect("localhost","root","root");
	if (!$cnx) {
	  die('Impossible de se connecter &agrave; la base de donn&eacute;es: ' . mysql_error());
	}
	// Sélection de la base
	mysql_select_db("BD_PRESENCE", $cnx);
	
	// On initialise la base en UTF-8 pour la gestion des caractères spéciaux
	$query = "SET CHARACTER SET utf8"; 
	mysql_query( $query ); 
?>