<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<?php
	
	$age = 65;


	if ($age < 18) {
		echo "Vous êtes mineur";
	}

	elseif ($age >= 60) {
		echo "Vous pouvez prendre votre retraite";
	}

	else echo "Vous êtes majeur mais vous ne pouvez pas prendre votre retraite";
	
?>
</body>
</html>