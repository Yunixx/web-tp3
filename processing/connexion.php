<?php
session_start();

require('param_bd.inc');

if(isset($_POST['username']) AND isset($_POST['password']) AND $_POST['username'] != null AND $_POST['password'] != null)
{
	//$bd = new pdo('mysql:host='.$dbHote.';dbname='.$dbName, $dbUser, $dbPass);
	$bd = new pdo('mysql:host=localhost;dbname=cmsrl' ,'root', 'toor');
	echo "test";

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
		$_SESSION['login'] = $data['login'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['acces'] = $data['acces'];
		// Si cocher, créer un cookie pour
		// se souvenir de l'utilisateur
		if($_POST['remember'])	
		{
			setcookie('cmsrl_remember', $data['id'], (time() + 10368000, '/');
		}
		echo true;
	}
	else
	{
		echo "Nom d'utilisateur ou mot de passe invalide.";
	}
}


?>
