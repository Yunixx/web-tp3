<?php
session_start();

require('param_bd.inc');

if(isset($_POST['username']) AND isset($_POST['password']) AND $_POST['username'] != null AND $_POST['password'] != null)
{
	$bd = new pdo('mysql:host='.$dbHote.';dbname='.$dbName, $dbUser, $dbPass);

	$req = $bd->prepare("SELECT * FROM usagers WHERE login = :login AND enc_password = :passdw");

	$req->execute(
		array(
			'login' => $_POST['username'],
			'passwd' => sha1($_POST['password'])
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
			
		{
			setcookie('cmsrl_remember', $data['id'], (time() + 3600), '/');
		}
		echo true;
	}
	else
	{
		echo "Nom d'utilisateur ou mot de passe invalide.";
	}
}


?>
