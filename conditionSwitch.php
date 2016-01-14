<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<?php
	
	$lg="sp";

	switch ($lg) {
		case 'fr':
			echo "Bonjour";
			break;
		
		case 'en':
			echo "Hello";
			break;
		
		case 'sp':
			echo "Holla";
			break;
		
		case 'de':
			echo "Güten Tag";
			break;
		
		default:
			echo "Langue inconnue";
			break;
	}



?>
</body>
</html>