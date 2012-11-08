<?php

session_start();

if(isset($_SESSION['id']) AND isset($_POST['username']) AND $_POST['username'] != NULL AND isset($_POST['password']) AND $_POST['password'] != NULL)
{
	if(strlen($_POST['username']) > 3 AND strlen($_POST['username']) < 40)
	{
		
		if(strlen($_POST['password']) > 6 AND strlen($_POST['password']) < 40)
		{
			
			require('../../lib/connect_bd.inc');
			
			$type = $_POST['typeUser'];
			
			$req = $bd->prepare('INSERT INTO usagers (login, enc_password, acces) VALUES(:login, :pass, :acces)');
			$req->execute(array(
				'login' => $_POST['username'],
				'pass' => sha1($_POST['password']),
				'acces' => $type
			));
								 
			echo "1";
			
		}
		else
		{
			echo "Format de mot de passe invalide! (Plus de 6 caractère et moins de 40 caractères)";
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
