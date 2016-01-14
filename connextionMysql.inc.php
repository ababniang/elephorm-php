<?php 
	//$connexion = mysql_connect("localhost" ,"aniang", "aniang");
	//mysql_select_db("catalogue");

	$connexion = new mysqli("localhost", "root", "", "catalogue");
	if ($connexion->connect_errno) {
	    echo "Echec lors de la connexion à MySQL : (" . $connexion->connect_errno . ") " . $connexion->connect_error;
	}

	//echo $connexion->host_info . "\n";

?>