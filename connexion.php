<?php
session_start();

require('param_bd.inc');

if(isset($_POST['login']) AND isset($_POST['passwd']) AND $_POST['login'] != null AND $_POST['passwd'] != null)
{
	$bd = new pdo('mysql:host='.$dbHote.';dbname='.$dbName, $dbUser, $dbPass);

	$req = $bd->prepare("SELECT * FROM usagers WHERE login = :login AND enc_password = :passdw");

	$req->execute(
		array(
			'login' => $_POST['login'],
			'passwd' => sha1($_POST['passwd'])
		));

	$data = $req->fetchAll();

	if(isset($data) AND $data != null)
	{
		$_SESSION['login'] = $data['login'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['acces'] = $data['acces'];
		echo true;
	}
	else
	{
		echo "Nom d'utilisateur ou mot de passe invalide.";
	}

}


?>
