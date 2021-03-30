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

	<?php
	    if (empty($_POST["nom"]) == false) {
	    	$nameUser = "Hola" . $_POST["nom"]." , usa éste link para compartir tu archivo";
	    }
	    else{
	    	$nameUser="Oye tu !! Usa éste link para compartir tu archivo.";
	    }

	    	$nom = $_FILES["arxiu"]["name"];
	    	$rutaTMP = $_FILES["arxiu"]["tmp_name"];
	    	$tamanyo = $_FILES["arxiu"]["size"];
	    	$tipus = $_FILES["arxiu"]["type"];
	    	$extension = substr($nom, strpos($nom, "."));
	    	$numeros = rand(10000,99999);
	    	$email = $_FILES["mail"]["name"];

	    	echo "$tamanyo";

	    	$rutaDestino = "files/".date("Ymd").$numeros.$extension;
	    	$linkDescarga = $_SERVER["HTTP_ORIGIN"]."uytransfer/$rutaDestino";

	    	echo "-----$tipus-----";
	    	if (($extension==".pdf" || $extension==".png" || $extension==".jpg" || $extension==".rar" || $extension==".zip") && $tamanyo <= 10) {

	    	$nom = $_FILES["arxiu"]["name"];
	    	echo " <table class='taula' >
	    	  <tr>
	    	    <td rowspan='3' class='h-75'> <img src='images/correcte.png'></img> </td>
	    	    <td><h2>$nameUser</h2> <br>
	    	    <h4>El archivo es <i> $nom </i> l'arxiu pesa: $tamanyo MB <br> y se ha enviado correctamente a <strong>$email</strong> <br></h4>
	    	    </td>
	    	    </tr>
	    	    <tr>
	    	       <a href=\'$rutaDestino\'>$linkDescarga</a>
	    	    </tr>
	    	    </table> ";
	    	}

	    	else if (($extension!=".pdf" || $extension!=".png" || $extension!=".jpg" || $extension!=".rar" || $extension!=".zip") && $tamanyo <= 10) {

	    	$nom = $_FILES["arxiu"]["name"];
	    	echo "formato no válido";
	    	echo "<td rowspan='3' class='h-75'> <img src='images/incorrecte.png'></img> </td>";
	        }

	        else if (($extension==".pdf" || $extension==".png" || $extension==".jpg" || $extension==".rar" || $extension==".zip") && $tamanyo > 10) {

	    	$nom = $_FILES["arxiu"]["name"];
	    	echo "supera el tamaño máximo";
	    	echo "<td rowspan='3' class='h-75'> <img src='images/incorrecte.png'></img> </td>";
	        }

	        else {
	        $nom = $_FILES["arxiu"]["name"];
	    	echo "tamaño y formato incorrectos";
	    	echo "<td rowspan='3' class='h-75'> <img src='images/incorrecte.png'></img> </td>";
	        }

	        
	    	move_uploaded_file($rutaTMP, $rutaDestino);

	    

	?>

</body>
</html>