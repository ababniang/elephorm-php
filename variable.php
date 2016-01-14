<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>

<?php 
	
	$prenom ="Ababacar";
	$nom ="Niang";
	$age = 35;
	$prix = 10.35;
	$reponse = (4==4);
	$tableau[0] = 4; 
	$tableau[1] = 5; 
	$retour = "<br />"; 


	echo $prenom," ", $nom;
	echo gettype($prenom);
	echo $retour;

	echo $age;
	echo gettype($age);
	echo $retour;

	echo $prix;
	echo gettype($prix);
	echo $retour;

	echo $reponse;
	echo gettype($reponse);
	echo $retour;

	echo $tableau[1];
	echo gettype($tableau);
	echo $retour;

?>


</body>
</html>