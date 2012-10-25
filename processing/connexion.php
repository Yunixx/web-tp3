<?php
session_start();

require('param_bd.inc');

if(isset($_POST['username']) AND isset($_POST['password']) AND $_POST['username'] != NULL AND $_POST['password'] != NULL)
{
	$bd = new pdo('mysql:host='.$dbHote.';dbname='.$dbName, $dbUser, $dbPass);

	$req = $bd->prepare("SELECT * FROM usagers WHERE login = :username AND enc_password = :password");

	$req->execute(
		array(
			'username' => $_POST['username'],
			'password' => sha1($_POST['password'])
		));

	$data = $req->fetchAll();

	if(isset($data) AND $data != null)
	{
		// Garder les variables de session
		$_SESSION['login'] = $data[0]['login'];
		$_SESSION['id'] = $data[0]['id'];
		$_SESSION['acces'] = $data[0]['acces'];
		// Si cocher, créer un cookie pour
		// se souvenir de l'utilisateur
		if($_POST['remember'] AND !isset($_COOKIE['cmsrl_remember']))	
		{
			setcookie('cmsrl_remember', $data[0]['id'], (time() + 3600), '/');
		}
		$req->closeCursor();
		echo true;
	}
	
	else
	{
		echo "Nom d'utilisateur ou mot de passe invalide.";
	}
}

else
{
	echo "Nom d'utilisateur ou mot de passe invalide.";
}


?>
