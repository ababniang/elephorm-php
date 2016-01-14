<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>

<?php 

	$ligne1=array(12, 15);
	$ligne2=array(14, 19);
	$ligne3=array(15, 12);

	echo "<pre>";
	print_r($ligne1);
	echo "<pre>";

	echo "<pre>";
	print_r($ligne2);
	echo "<pre>";

	$classe = array($ligne1, $ligne2);

	$classe[]= $ligne3;


	echo "<pre>";
	print_r($classe);
	echo "<pre>";

	echo $classe[1][0];


?>


</body>
</html>