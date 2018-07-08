<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Envoie de mail</title>
	<link rel="icon" type="image/png" href="./photo_romain.jpg" sizes="16x16"> 
</head>
<body>
	<?php
		if(isset ($_POST["user_name"]) and isset($_POST["user_email"]) and isset($_POST["user_message"]))
		{
		    if (($_POST["user_name"] != "") and ($_POST["user_email"] != "") and ($_POST["user_message"] != "")) {
			$user_name = strip_tags($_POST["user_name"]);
			$user_email = strip_tags($_POST["user_email"]);
			$user_message = strip_tags($_POST["user_message"]);
			mail("novixjo@hotmail.com", "message de ".$user_email, $user_message."\n".$user_name);
			echo "Success votre mail a bien été envoyer!";
		    }
		    else 
		    {
				echo "<p>Veuillez remplir tout les champs SVP.</p>";
		    }
		}
		else 
		{
			echo "<p>Impossible d'envoyer le mail , veuillez recommencer !</p>";
		}
	?>

</body>
</html>