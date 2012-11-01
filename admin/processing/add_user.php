<?php

session_start();

if(isset($_SESSION['id']) AND isset($_POST['username']) AND $_POST['username'] != NULL AND isset($_POST['password']) AND $_POST['password'] != NULL)
{
	if(strlen($_POST['username']) < 3 AND strlen($_POST['username']) > 40)
	{
		
		if(strlen($_POST['username']) < 6 AND strlen($_POST['username']) > 40)
		{
			
			require('../lib/connect_db.inc');
			
			$req = $bd->prepare('INSERT login, enc_password, acces INTO usagers');
			
			
		}
		else
		{
			echo "Format de mot de passe invalide! (Plus de 6 caractre et moins de 40 caractres)"
		}
		
	}
	else
	{
		echo "Veuillez entrer un nom d'utilisateur valide";
	}
}

else
{
	echo "Veuillez remplir tout les champs !";
}


?>
