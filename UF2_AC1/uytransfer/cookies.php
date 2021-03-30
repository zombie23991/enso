<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>upload</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>

<body>
	<?php include 'header.php' ?>

	<h5>Archivos enviados recientemente</h5>

	<?php

	    $link = "https://www.google.com/";

	    $numlinks = 1;
	    if (isset($_COOKIE["numlinks"])) {
	    	$numlinks = $_COOKIE["numlinks"];
	    	$numlinks++;

	    	while (isset($_COOKIE["link$numlinks"])) {

	    		$link = $_COOKIE["link$numlinks"];
	    		echo "<p><a href=\"$link\">$link</a></p>";

	    		$numlinks--;	
	    	}
	    }

	    setcookie("numlinks", $numlinks, time() + 60 * 60 * 24 * 1000);

	    setcookie("link$numlinks", $link, time() + 60 * 60 * 24 * 7);

	    echo "Hecho";
	?>
</body>
</html>